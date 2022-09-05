const postBtn=document.getElementById('post');
const blank=document.createElement('br');
/** credit:Lejian Luo
 * add listener to postcomment button
 * create article and append child elements to the article(username, date, comment etc)
 * get comment from textarea
 * append article as  child element to the comment section 
 * 
 */

function postComment(){
    let comment=document.createElement('article');
    let text=document.getElementsByTagName('textarea')[0].value;
    let nameTag=document.createElement('h4');
    let date=document.createElement('span');
    let content=document.createElement('p');
    let img=document.createElement('img');
    let username=document.getElementById('user').textContent;

    comment.setAttribute('class','comment');
    img.setAttribute('src','https://i.imgur.com/CFpa3nK.jpg');
    img.setAttribute('alt','usericon');
    nameTag.innerHTML=username;
    date.innerHTML=new Date().toDateString();
    content.innerHTML=text;
    comment.appendChild(img);
    comment.appendChild(nameTag);
    comment.appendChild(date);
    comment.appendChild(blank);
    comment.appendChild(content);
    
    document.getElementById('postedcomment').appendChild(comment);
    document.getElementsByTagName('textarea')[0].value='';
}


postBtn.addEventListener('click', postComment);
