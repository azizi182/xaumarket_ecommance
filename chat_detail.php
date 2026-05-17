<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat With Seller - XauMarket</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>

:root{
    --primary-color:#111827;
    --secondary-color:#1f2937;
    --accent-color:#fbbf24;
    --light-bg:#f9fafb;
    --gold-light:#fcd34d;
    --white:#ffffff;
    --text-dark:#1e293b;
    --border-light:#e5e7eb;
    --card-bg:#ffffff;
}

body{
    background:linear-gradient(135deg,#f9fafb,#f3f4f6);
    font-family:'Segoe UI',sans-serif;
    color:#111827;
    overflow-x:hidden;
}

/* ================= NAVBAR ================= */

.navbar{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    padding:1rem 0;
    position:sticky;
    top:0;
    z-index:1000;

    box-shadow:
    0 5px 20px rgba(0,0,0,0.15);
}

.navbar-brand{
    font-size:1.7rem;
    font-weight:700;
    color:white !important;
}

.navbar-brand i{
    color:var(--accent-color);
}

/* ================= CHAT LAYOUT ================= */

.chat-container{
    max-width:1500px;
    margin:35px auto;
}

.chat-wrapper{
    background:white;
    border-radius:24px;
    overflow:hidden;

    box-shadow:
    0 20px 40px rgba(0,0,0,0.08);
}

/* ================= SIDEBAR ================= */

.chat-sidebar{
    background:var(--secondary-color);
    color:white;
    height:80vh;
    overflow-y:auto;
}

.sidebar-header{
    padding:22px;
    border-bottom:1px solid rgba(255,255,255,0.08);
}

.sidebar-title{
    font-size:1.2rem;
    font-weight:700;
}

.chat-user{
    display:flex;
    align-items:center;
    gap:14px;

    padding:18px 22px;

    cursor:pointer;

    transition:0.3s;

    border-bottom:1px solid rgba(255,255,255,0.05);
}

.chat-user:hover,
.chat-user.active{
    background:rgba(255,255,255,0.08);
}

.user-avatar{
    width:52px;
    height:52px;

    border-radius:50%;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    display:flex;
    align-items:center;
    justify-content:center;

    color:#111827;
    font-weight:700;
}

.user-name{
    font-weight:700;
    margin-bottom:3px;
}

.user-message{
    font-size:0.85rem;
    opacity:0.75;
}

/* ================= CHAT AREA ================= */

.chat-area{
    display:flex;
    flex-direction:column;
    height:80vh;
    background:#f9fafb;
}

/* HEADER */

.chat-header{
    background:white;

    padding:18px 22px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    border-bottom:1px solid #e5e7eb;
}

.chat-profile{
    display:flex;
    align-items:center;
    gap:14px;
}

.chat-profile img{
    width:50px;
    height:50px;
    border-radius:50%;
    object-fit:cover;
}

.chat-name{
    font-weight:700;
    margin-bottom:2px;
}

.chat-status{
    color:#10b981;
    font-size:0.9rem;
}

/* MESSAGES */

.chat-messages{
    flex:1;
    padding:25px;
    overflow-y:auto;
}

.message{
    display:flex;
    margin-bottom:18px;
}

.message.sent{
    justify-content:flex-end;
}

.message-bubble{
    max-width:75%;
    padding:14px 18px;
    border-radius:18px;
    position:relative;

    box-shadow:
    0 5px 15px rgba(0,0,0,0.05);
}

.received .message-bubble{
    background:white;
    border-top-left-radius:5px;
}

.sent .message-bubble{
    background:linear-gradient(135deg,#fbbf24,#f59e0b);
    color:#111827;
    border-top-right-radius:5px;
}

.message-time{
    font-size:0.75rem;
    margin-top:6px;
    opacity:0.7;
}

/* INPUT AREA */

.chat-input-area{
    background:white;
    padding:18px 20px;

    border-top:1px solid #e5e7eb;
}

.chat-input-wrapper{
    display:flex;
    align-items:center;
    gap:12px;

    background:#f3f4f6;

    padding:10px 14px;

    border-radius:18px;
}

.chat-input{
    flex:1;
    border:none;
    outline:none;
    background:transparent;

    font-size:0.95rem;
}

.chat-tools{
    display:flex;
    align-items:center;
    gap:10px;
}

.tool-btn{
    width:42px;
    height:42px;

    border:none;
    border-radius:50%;

    background:white;

    color:#6b7280;

    transition:0.3s;

    box-shadow:
    0 5px 15px rgba(0,0,0,0.05);
}

.tool-btn:hover{
    background:#fbbf24;
    color:#111827;

    transform:translateY(-2px);
}

.send-btn{
    width:48px;
    height:48px;

    border:none;
    border-radius:50%;

    background:linear-gradient(135deg,#fbbf24,#f59e0b);

    color:#111827;

    font-size:1rem;

    transition:0.3s;

    box-shadow:
    0 10px 20px rgba(251,191,36,0.3);
}

.send-btn:hover{
    transform:scale(1.05);
}

/* ================= BACK BUTTON ================= */

.back-btn{
    width:46px;
    height:46px;

    border:none;
    border-radius:14px;

    background:rgba(17,24,39,0.08);

    color:#111827;

    transition:0.3s;

    display:flex;
    align-items:center;
    justify-content:center;

    box-shadow:
    0 5px 15px rgba(0,0,0,0.05);
}

.back-btn:hover{
    background:#fbbf24;
    color:#111827;

    transform:translateY(-2px);
}

/* ================= MOBILE SIDEBAR ================= */

.sidebar-overlay{
    display:none;
}

@media(max-width:992px){

    .chat-sidebar{
        position:fixed;
        top:0;
        left:-320px;

        width:300px;
        height:100vh;

        z-index:2000;

        transition:0.35s ease;
    }

    .chat-sidebar.show{
        left:0;
    }

    .sidebar-overlay{
        display:block;

        position:fixed;
        inset:0;

        background:rgba(0,0,0,0.45);

        opacity:0;
        visibility:hidden;

        transition:0.3s;

        z-index:1500;
    }

    .sidebar-overlay.show{
        opacity:1;
        visibility:visible;
    }

}

/* ================= MOBILE ================= */

@media(max-width:992px){

    .chat-sidebar{
        display:none;
    }

    .chat-area{
        height:85vh;
    }

}

@media(max-width:768px){

    .chat-container{
        margin:15px;
    }

    .message-bubble{
        max-width:90%;
    }

}

/* ================= FOOTER ================= */

footer{
    background:linear-gradient(135deg,var(--primary-color),var(--secondary-color));
    color:white;
    padding:3rem 2rem 1rem;
    margin-top:3rem;
}

.footer-content{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:2rem;
    margin-bottom:2rem;
}

.footer-section h4{
    font-size:1.2rem;
    font-weight:700;
    margin-bottom:1rem;
    color:var(--accent-color);
}

.footer-section ul{
    list-style:none;
}

.footer-section ul li{
    margin-bottom:0.8rem;
}

.footer-section a{
    color:white;
    text-decoration:none;
    opacity:0.85;
    transition:0.3s;
}

.footer-section a:hover{
    opacity:1;
    color:var(--accent-color);
}

.footer-bottom{
    border-top:1px solid rgba(255,255,255,0.1);
    padding-top:2rem;
    text-align:center;
    opacity:0.9;
}

</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a href="index.php" class="navbar-brand text-decoration-none">
            <i class="fas fa-coins"></i> XauMarket
        </a>

    </div>
</nav>

<!-- ================= CHAT ================= -->

<div class="container chat-container">

    <div class="chat-wrapper">

        <div class="row g-0">

            <!-- SIDEBAR -->
            <div class="col-lg-4">
                

                <div class="chat-sidebar" id="chatSidebar">
                    

                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Messages
                        </div>
                    </div>

                    <div class="chat-user active">

                        <div class="user-avatar">
                            J
                        </div>

                        <div>
                            <div class="user-name">
                                John Seller
                            </div>

                            <div class="user-message">
                                Sure, item still available
                            </div>
                        </div>

                    </div>

                    <div class="chat-user">

                        <div class="user-avatar">
                            S
                        </div>

                        <div>
                            <div class="user-name">
                                Sarah Shop
                            </div>

                            <div class="user-message">
                                Thank you for buying
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- CHAT AREA -->
            <div class="col-lg-8">

                <div class="chat-area">

                    <!-- HEADER -->
                    
        <div class="chat-header">

            <div class="d-flex align-items-center gap-3">

                <!-- MOBILE SIDEBAR BUTTON -->
                <button class="tool-btn d-lg-none" id="openSidebar">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- MODERN BACK BUTTON -->
                <button class="back-btn" onclick="history.back()">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <!-- PROFILE -->
                <div class="chat-profile">

                    <img src="https://i.pravatar.cc/100?img=12">

                    <div>
                        <div class="chat-name">
                            John Seller
                        </div>

                        <div class="chat-status">
                            Online
                        </div>
                    </div>

                </div>

            </div>

            <!-- PHONE BUTTON -->
            <button class="tool-btn">
                <i class="fas fa-phone"></i>
            </button>

        </div>
                    <!-- MESSAGES -->
                    <div class="chat-messages">

                        <div class="message received">
                            <div class="message-bubble">
                                Hi, are you interested with this headphones?
                                <div class="message-time">
                                    10:20 AM
                                </div>
                            </div>
                        </div>

                        <div class="message sent">
                            <div class="message-bubble">
                                Yes, is it still available?
                                <div class="message-time">
                                    10:21 AM
                                </div>
                            </div>
                        </div>

                        <div class="message received">
                            <div class="message-bubble">
                                Yes available 👍
                                <div class="message-time">
                                    10:22 AM
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- INPUT -->
                    <div class="chat-input-area">

                        <div class="chat-input-wrapper">

                            <div class="chat-tools">

                                <button class="tool-btn">
                                    <i class="fas fa-image"></i>
                                </button>

                                <button class="tool-btn">
                                    <i class="fas fa-paperclip"></i>
                                </button>

                                <button class="tool-btn">
                                    <i class="fas fa-face-smile"></i>
                                </button>

                            </div>

                            <input 
                                type="text" 
                                class="chat-input"
                                placeholder="Type your message..."
                            >

                            <button class="send-btn">
                                <i class="fas fa-paper-plane"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ============ FOOTER ============ -->
<?php include('includes/footer.php'); ?>

<script>

const sidebar = document.getElementById('chatSidebar');
const overlay = document.getElementById('sidebarOverlay');
const openBtn = document.getElementById('openSidebar');

openBtn.addEventListener('click', () => {
    sidebar.classList.add('show');
    overlay.classList.add('show');
});

overlay.addEventListener('click', () => {
    sidebar.classList.remove('show');
    overlay.classList.remove('show');
});

</script>

</body>
</html>