<?php namespace TGL\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\SessionManager;
use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Stripe;
use TGL\Commands\ShoeRequestCheckoutCommand;
use TGL\Http\Requests\AcceptOrderRequest;
use TGL\Http\Requests\AddOrderPriceRequest;
use TGL\Http\Requests\DeclineOrderRequest;
use TGL\Http\Requests\ShoeRequestCheckoutRequest;
use TGL\Http\Requests\ShoeRequestRequest;
use TGL\Orders\Services\OrderService;

class OrderController extends Controller
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * @var Guard
     */
    protected $auth;

    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * @param SessionManager $session
     * @param Guard $auth
     * @param OrderService $orderService
     */
    function __construct(SessionManager $session, Guard $auth, OrderService $orderService)
    {
        $this->session = $session;
        $this->auth = $auth;
        $this->orderService = $orderService;

        $this->middleware('auth', ['except' => 'getShoeRequest']);
        $this->middleware('auth', ['except' => 'postShoeRequest']);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getShoeRequest()
    {
        return view('order.shoe-request');
    }

    /**
     * @param ShoeRequestRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postShoeRequest(ShoeRequestRequest $request)
    {
        $input = $request->all();

        $this->session->put('order', [
            'brand' => $input['brand'],
            'model' => $input['model'],
            'size' => $input['size'],
            'url' => $input['url'],
            'msg' => $input['message'],
        ]);

        return redirect()->to('/shoe-request/checkout');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getShoeRequestCheckout()
    {
        $user = $this->auth->user();

        return view('order.checkout', compact('user'));
    }

    /**
     * @param ShoeRequestCheckoutRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postShoeRequestCheckout(ShoeRequestCheckoutRequest $request)
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here https://dashboard.stripe.com/account
        Stripe::setApiKey("sk_test_Z2LsF02j45JewItD81kYfLpt");

        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];

        // Create the charge on Stripe's servers - this will charge the user's card
        try {
            $charge = Charge::create(array(
                   "amount" => 1400, // amount in cents, again
                   "currency" => "usd",
                   "source" => $token,
                   "description" => "Shoe request")
            );

            $this->dispatchFrom(ShoeRequestCheckoutCommand::class, $request);

            //Flash::message('Thank You!');

            return redirect()->to('/'.$this->auth->user()->slug.'/orders');

        } catch(Card $e) {
            // The card has been declined
        }
    }

    /**
     * @param $username
     * @return \Illuminate\View\View
     */
    public function getUserOrders($username)
    {
        $orders = $this->orderService->getUserOrders($username);
        $user = $this->auth->user();

        return view('order.user-orders', compact('orders', 'user'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getAdminOrders()
    {
        $orders = $this->orderService->getOrders();

        return view('order.admin-orders', compact('orders'));
    }

    /**
     * @param $username
     * @param $order_number
     * @return \Illuminate\View\View
     */
    public function getUserOrder($username, $order_number)
    {
        $user = $this->auth->user();
        $order = $this->orderService->getOrder($order_number);

        return view('order.user-order', compact('order', 'user'));
    }

    /**
     * @param $order_number
     * @return \Illuminate\View\View
     */
    public function getAdminOrder($order_number)
    {
        $order = $this->orderService->getOrder($order_number);

        return view('order.admin-order', compact('order'));
    }

    /**
     * @param AddOrderPriceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddPrice(AddOrderPriceRequest $request)
    {
        $input = $request->all();

        $this->orderService->addPrice($input['order_number'], $input['price']);

        //Flash::message('Price has been added');

        return redirect()->back();
    }

    /**
     * @param AcceptOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAcceptOrder(AcceptOrderRequest $request)
    {
        $input = $request->all();

        $this->orderService->acceptOrder($input['order_number']);

        //Flash::message('Thank You! Order has been accepted');

        return redirect()->back();
    }

    /**
     * @param DeclineOrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDeclineOrder(DeclineOrderRequest $request)
    {
        $input = $request->all();

        $this->orderService->declineOrder($input['order_number']);

        //Flash::message('We're sorry to see that! Your order has been declined');

        return redirect()->back();
    }
}
