<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>

<link rel="stylesheet" href="css/normalize.css">

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

<link rel="stylesheet" href="css/style.css">

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCngu2R3k_sFCxscabmV73s3pp6IjC4vns",
    authDomain: "my-test-project-ed8ad.firebaseapp.com",
    databaseURL: "https://my-test-project-ed8ad-default-rtdb.firebaseio.com",
    projectId: "my-test-project-ed8ad",
    storageBucket: "my-test-project-ed8ad.appspot.com",
    messagingSenderId: "533887388472",
    appId: "1:533887388472:web:290261fb165e09629f0fcd"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const databaseRef = firebase.database().ref("messages");

  databaseRef.on("child_removed", (snapshot) => {
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been deleted";
  });

  function deleteMessage(self) {
    const messageId = self.getAttribute("data-id");
    databaseRef.child(messageId).remove();
  }

  function sendMessage() {
    const message = document.getElementById("message").value;
    databaseRef.push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
</style>

<div class="chat">
  <div class="chat-title">
    <h1>Chat Room</h1>
    <h2>Assistance</h2>
    <figure class="avatar">
      <img src="https://p7.hiclipart.com/preview/349/273/275/livechat-online-chat-computer-icons-chat-room-web-chat-others.jpg" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit">Send</button>
  </div>

</div>
<div class="bg"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

<script src="js/chat_index.js?v=<?= time(); ?>"></script>

<style>
  .fixed-bottom {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: lightseagreen;
    color: white;
    text-align: center;
    padding: 25px;
  }