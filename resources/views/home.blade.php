<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="layout-app">
        <header>
            <div class="layout-container">
                <div class="layout">
                    <div class="header-logo left">
                        <span>Logo</span>
                    </div>
                    <div class="search left">
                        <input type="text"/>
                    </div>
                    <nav class="header-nav right">
                        <ul>
                            <li><a href=""></a>Item</li>
                            <li><a href=""></a>Portem</li>
                            <li><a href=""></a>Pmtem</li>
                            <li><a href=""></a>Post</li>
                            <li><a href=""></a>PostItem</li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <main>
            <div class="section-wrapper">
                <div class="layout-container">
                   <section class="main-menu-section left">
                       <div class="layout-wrapper">
                           <ul>
                               <li><a href="">Item</a></li>
                               <li><a href="">Item Post</a></li>
                               <li><a href="">Some Link</a></li>
                               <li><a href="">Upper</a></li>
                               <li><a href="">Face One</a></li>
                               <li><a href="">Lorem String</a></li>
                           </ul>
                       </div>
                   </section>
                   <section class="main-user-section left">
                    <div class="layout-wrapper">
                        <div>
                            <img src="http://www.nouspace.net/john/commons/images/avatar.gif" alt=""/>
                        </div>
                        <hr/>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ea illum impedit ipsam recusandae.
                            Autem distinctio dolorum facilis fuga harum ipsum neque nostrum placeat tempora velit! Consequatur culpa mollitia quidem!

                        </div>
                    </div>
                   </section>
                   <section class="main-wall-section left">
                       <div class="layout-wrapper">
                           Lorem ipsum dolor sit amet, consectetur cupiditate
                           <div>
                               Edit profile
                           </div>
                           doloremque praesentium vitae? Corporis delectus in maxime omnis saepe. A dicta ducimus laboriosam vel! Ea quos repudiandae tempore totam?
                           <div>
                               <hr/>
                                Lorem ipsum dolor sit am. Accusantium adipisci culpa cum cupiditate, doloribus eligendi eos esse expedita facilis iusto molestiae mollitia omnis recusandae ut vitae! Eligendi eum perferendis saepe.
                               <div>
                                   <i class="glyphicon glyphicon-option-horizontal"></i>
                                   <span style="font-size:12px;">2016 17:25</span>
                               </div>

                               <hr/>
                                Lorem ipsuelit. Adipisci at consectetur eaque error et, eveniet incidunt ipsam, ipsum laboriosam perferendis perspiciatis quas temporibus. Aliquam aliquid itaque officiis quibusdam tempore unde.

                               <hr/>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci culpa cum cupiditate, doloribus eligendi eos esse expedita facilis iusto molestiae mollitia omnis recusandae ut vitae! Eligendi eum perferendis saepe.
                               <div>
                                   <i class="glyphicon glyphicon-option-horizontal"></i>
                                   <span style="font-size:12px;">2016 17:25</span>
                               </div>
                           </div>
                       </div>
                   </section>
                    <div class="clear"></div>
                </div>
            </div>
        </main>
        <footer>
            <div class="layout-container">
                <div class="layout">
                    <div class="copy">&copy Footer Coopy text Some String </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>




<style>
/*
*App Config
*/
.main-menu-section{width: 20%;}
.main-user-section{width: 30%;}
.main-wall-section {width: 50%;}

.search{margin: 0 0 0 45px;}
.copy{text-align: center;}
.layout-wrapper{
    padding: 0 15px;
}
.left{
    float: left;
}

.right{
    float: right;
}

.clear{
    clear: both;
}


.layout-container{
    max-width: 780px;
    margin: 0 auto;
}

.layout {
    padding: 0 15px 0 15px;

}

nav.header-nav.right {
    margin: 0;
    padding: 0;
}

ul{
    margin: 0;
    padding: 0;
}
ul li{
    list-style-type: none;
}


header , footer  {
    background-color: #f8f8f8;
    padding: 15px 0 15px 0;
    border-bottom: 1px solid rgba(164, 141, 142, 0.23);
    border-color: #e7e7e7;
}

main{
    margin-top: 15px;
}

header ul li{
    display: inline-block;
    list-style-type: none;
    padding: 0 0 0 30px;

    font-size: 14px;
}

span{
    font-size: 16px;}

main  img{
    max-width: 100%;
}

    body , a , *{
        font-size: 13px;
        font-family: monospace;
        line-height: 24px;
        color: #221F1F;
    }



</style>