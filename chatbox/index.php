<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>


    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #8ce69f;border-bottom: 2px solid #0b4017">
        <a class="navbar-brand" href="index.php">ChatBox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav " style="float: right;">
                <li class="nav-item">

                </li> &nbsp;&nbsp;<li><a href="logout.php">
                        <i class="fa fa-power-off"></i> </a>
                </li>
            </ul>
        </div>
    </nav><br><br><Br>

    <div class="container">
        <!-- <h3 class=" text-center">Messaging</h3> -->
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch" style="background-color: #d8e0a6">
                        <div class="d-flex">
                            <div class="flex-1">
                                <div class="recent_heading">
                                    <h4><img src="download.png" alt="sunil"
                                            style="border-radius: 50%;width: 50px;height: 50px">
                                    </h4>

                                </div>
                                <div class="flex-1" style="width: 200px;font-weight: bold;margin-top:5%;font-size:20px">
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="inbox_chat">

                        <div class="chat_list active_chat">
                            <a href="index.php?receiver=">
                                <div class="chat_people">
                                    <div class="chat_img"> <img src="download.png" alt="sunil"
                                            style="border-radius: 50%">

                                        <i class='fa fa-circle offline'
                                            style='color:red;position:absolute;margin-top:2%;margin-left:-1%'></i>


                                    </div>
                                    <div class="chat_ib mt-2">
                                        <h5>
                                        </h5>
                                        <!--        <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>

                <div class="mesgs">
                    <div class="msg_history">



                        <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="download.png" alt="sunil"
                                    style="border-radius: 50%"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p></p>
                                    <span class="time_date"> |
                                    </span>
                                </div>
                            </div>
                        </div>




                        <div class="outgoing_msg">

                            <div class="incoming_msg_img" style="float: right;margin-right: 1%;"> <img
                                    src="download.png" alt="sunil" style="border-radius: 50%;"> </div>
                            <div class="sent_msg" style="padding-right: 1%">
                                <p></p>
                                <span class="time_date"></span>
                            </div>
                        </div>



                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input type="hidden" name="" id="photo" value="">
                            <input type="hidden" name="" id="sender" value="">
                            <input type="hidden" name="" id="sender_id" value="">
                            <input type="text" class="write_msg" id="message" placeholder="Type a message" />
                            <input type="hidden" name="" id="receiver" value="">
                            <button class="msg_send_btn" type="button" id="btn_sender"><i class="fa fa-paper-plane-o"
                                    aria-hidden="true"></i></button>

                        </div>
                        <div id="mgs-chat"></div>
                    </div>
                </div>
            </div>
            <p class="text-center top_spac"> <a target="_blank" href="#">All right Reserved © 2022 Created
                    By:JunilToledo</a></p>

        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="js/messages.js"></script>