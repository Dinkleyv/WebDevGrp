

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comment with Picture</title>
<style>
    body {
        margin: 0;
        padding: 20px;
        background-color: #9ACD32;
    }
    h1 {
     text-align: center;
    text-decoration: underline;
    color: blue;
    font-family: 'Lobster', cursive;
    text-align: center;
    font-size: 30px;
    }
    #comments {
        margin-top: 20px;
    }
    .comment {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px 0;
    }
    .comment img {
        max-width: 100%;
        height: auto;
    }
    .topnavi{
    background-color: lightgrey;
    border-width: 1px;
        border-color: black;
        border-style: solid;
        font-size: 30px;
        font-family: 'Fantasy', papyrus;
    color: white;
    display: outline;
        padding: 14px 16px;

}
.comment_container{
    border-style: solid;
    border-color: red;
}
</style>
</head>
<body>

<div class="topnavi">
  <a href="login.php">LOGIN</a>
  <a href="home.php">HOME</a> 
  <a href="comments.php">SHARE</a>
  <a href="logout.php">LOGOUT</a>
</div>
<h1>Share with Us</h1>

<div>
    <label for="commentText">Comment:</label>
    <div class="comment_container">
    <textarea id="commentText" rows="4" cols="50"></textarea></div>
</div>
<div>
    <label for="imageInput">Upload Image:</label>
    <input type="file" id="imageInput" accept="image/*" onchange="previewImage()">
</div>
<div id="imagePreview"></div>
<div>
    <button onclick="addComment()">Add Comment</button>
</div>
<div id="comments"></div>
<script>
function previewImage() {
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    
    if (imageInput.files.length > 0) {
        const image = document.createElement('img');
        image.src = URL.createObjectURL(imageInput.files[0]);
        image.style.maxWidth = '100%';
        image.style.height = 'auto';
        
        imagePreview.innerHTML = '';
        imagePreview.appendChild(image);
    } else {
        imagePreview.innerHTML = '';
    }
}

function addComment() {
    const commentText = document.getElementById('commentText').value;
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    
    if (commentText.trim() === '') {
        alert('Please enter a comment.');
        return;
    }
    
    let commentElement = document.createElement('div');
    commentElement.classList.add('comment');
    commentElement.textContent = commentText;
    
    if (imageInput.files.length > 0) {
        const image = document.createElement('img');
        image.src = URL.createObjectURL(imageInput.files[0]);
        image.style.maxWidth = '100%';
        commentElement.appendChild(image);
        
        imagePreview.innerHTML = '';
    }
    
    document.getElementById('comments').appendChild(commentElement);
    
    document.getElementById('commentText').value = '';
    imageInput.value = '';
}
</script>
</body>
</html>
