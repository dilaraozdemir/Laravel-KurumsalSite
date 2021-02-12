
<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="companyinfo">
                        <h2>Contact</h2>
                        <strong>Company :</strong> {{$seting->company}} <br>
                        <strong>Address :</strong> {{$seting->address}} <br>
                        <strong>Phone :</strong> {{$seting->phone}} <br>
                        <strong>Fax :</strong> {{$seting->fax}} <br>
                        <strong>Email :</strong> {{$seting->email}} <br>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{ asset('assets')}}/images/home/map.png" alt="" />
                        <p>{{$seting->address}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">All rights reserved. | {{$seting->company}}</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

