body{
margin:0;
font-family:Arial;
background:#f3f3f3;
}
/* HERO */
.hero{
background:url("hero.png");
background-size:cover;
background-position:center;
height:500px;
position:relative;
}

.overlay{
height:100%;
background:rgba(0,0,0,.35);
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
color:white;
text-align:center;
position:relative;
}

.logo{
position:absolute;
top:20px;
left:25px;
font-size:30px;
font-weight:bold;
}

.hero-btn{
position:absolute;
top:18px;
right:25px;
background:#472480;
color:white;
text-decoration:none;
padding:12px 28px;
border-radius:30px;
}

.overlay h1{
font-size:60px;
margin-bottom:15px;
}

.overlay p{
max-width:700px;
line-height:1.7;
font-size:20px;
}
/* SECTION TITLE */
.title{
margin:30px 45px;
font-size:34px;
}
/* CARDS */
.cards{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
width:92%;
margin:auto;
padding-bottom:50px;
}

.card{
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 4px 10px rgba(0,0,0,.12);
}

.card img{
width:100%;
height:145px;
object-fit:cover;
}

.card h3{
padding:12px 15px 0;
margin:0;
font-size:24px;
}

.card p{
padding-left:15px;
margin-top:8px;
color:#999;
font-size:15px;
}
/* TIME + BUTTON */
.bottom-row{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px;
}

.time{
display:flex;
align-items:center;
gap:6px;
font-size:14px;
color:#666;
}

.time i{
font-size:13px;
color:#888;
}

.bottom-row button{
background:#472480;
border:none;
color:white;
padding:8px 20px;
border-radius:18px;
cursor:pointer;
}
/* FOOTER */
footer{
background:#472480;
color:white;
text-align:center;
padding:18px;
font-size:22px;
}
