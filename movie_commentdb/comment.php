<!--credit:Lejian Luo
  this page is embedded into other pages as an iframe. it displays comments, date, and username and icon.
  the post commment button post the text inside the textarea into the comment section.
-->
<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/robot.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link href='css/comment.css' rel='stylesheet' type='text/css'/>
    <script src="https://kit.fontawesome.com/181536840e.js" crossorigin="anonymous"></script>
    <script src="comment.js" defer></script>
</head>
<body>
    <div id="commentsection">
        <div id="postedcomment">
          <article class="comment">
            <img src="https://i.imgur.com/CFpa3nK.jpg" alt="usericon" >
            <h4>Rob Simpson</h4>
            <span>Fri Aug 05 2022</span>
            <br>
            <p>
            Continuing the tradition of thoughtfully outlining a system-wide conflict while following through a portal 
            to countless untold problems, “The Expanse” is an evolving text that an increased sense of scale has only made richer. </p>
          </article>
          <article class="comment">
            <img src="https://i.imgur.com/CFpa3nK.jpg" alt="usericon" >
            <h4>Rob Simpson</h4>
            <span>Fri Aug 05 2022</span>
            <br>
            <p>Minor misgivings aside, it’s a relief to have a new season of The Expanse to get lost in. The show is still one of the 
              best science fiction series out there, and it appears to have made the move to streaming with minimal compromises.</p>
          </article>
          <article class="comment">
            <img src="https://i.imgur.com/CFpa3nK.jpg" alt="usericon" >
            <h4>Rob Simpson</h4>
            <span>Sat Aug 05 2022</span>
            <br>
            <p>
            Complicated as this set-up might read, the sheer gorgeousness of “The Expense” goes quite a distance toward shoring up a person’s commitment to it, as do the performances. ... 
            A heavily serialized show like this one will never be easily accessible to newcomers who
            </p>
          </article>
        </div>
        <div id="writecomment">
          <?php include('commentvalue.php');?>
          <form>
            <div id="commentbox">
              <h4>Leave a comment</h4>
              <span id="user" name="username_comment"><?php echo $username ?></span>
              <label for="message"></label>
                <textarea name="msg" msg cols="32" rows="7" style="background-color: white;"></textarea>     
              <button type="button" id="post" class="btn">Post Comment</button>
            </div>
          </form>
        </div>
     </div>
</body>
</html>