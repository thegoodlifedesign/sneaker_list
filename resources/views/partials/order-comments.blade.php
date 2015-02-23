<div id="orderComments">
            <div class="wrapper">
                <div class="comments-header">
                    <h2 class="center-align">Comments</h2>
                </div>
                @foreach($order->comments as $comment)
                    <div class="comment-body">
                        <div class="row">
                            <div class="col s9">
                                <p>{{$comment->comment}}</p>
                            </div>
                            <div class="col s3">
                                <strong>{{($comment->user->username)}}</strong>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="new-comment-wrapper">
                    <form method="post" action="/order/new-comment">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <div class="row">
                            <div class="col s9 input-field">
                                <input class="rod-input" type="text" name="comment" id="commentInput">
                                <label for="commentInput">Comment</label>
                            </div>
                            <div class="col s3">
                                <button class="btn waves-effect waves-light comment-btn" type="submit" name="action">Comment
                                    <i class="mdi-content-send right"></i>
                                 </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>