<html>
    <body>
        <div class="col-md-12">
            <div class="row">
                <h3>New Message From Contact Form</h3>
                <p><b>Name   </b>  : {{$request->name}} </p>
                <p><b>Email  </b>  : {{$request->email}} </p>
                <p><b>Phone  </b>  : {{$request->phone}} </p>
                <p><b>Message</b>  : {{$request->message}} </p>
            </div>
        </div>
    </body>
</html>
