<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEeducations-Transfroming Online Education </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="three.jpg"> </div>
             <li><a href="#home">Home</a></li>
             <li><a href="#about">About</a></li>
             <li><a href="#services">Service</a></li>
             <li><a href="#bottom">Contactus</a></li>    
        </ul>
        <div class="rightnav v-class">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

    </nav>
    <section class="background firstsection">
         <div class="boxmain">
             <div class="firsthalf">
                <p class="textbig">The Future of Education is here</p> 
                <p class="textsmall">In this world of 7 billion people we need to educate all of them. this is the furtue of Education</p> 
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">watch videos</button>

                </div>
            </div>

             <div class="secondhalf">
                 <img src="eight.jpg">
                 <img width="100%">
             </div>
         </div>
         

    </section>
    <section class="section">
        <div class="paras">
        <p class="sectiontag textbig">JAVASCRIPT</p>
        <br><br>
        
        <p class="sectionsubtag textsmall">JavaScript (often shortened to JS) is a lightweight, interpreted, object-oriented language with first-class functions, and is best known as the scripting language for Web pages, but it's used in many non-browser environments as well. It is a prototype-based, multi-paradigm scripting language that is dynamic, and supports object-oriented, imperative, and functional programming styles.

            JavaScript runs on the client side of the web, which can be used to design / program how the web pages behave on the occurrence of an event. JavaScript is an easy to learn and also powerful scripting language, widely used for controlling web page behavior.
            
            Contrary to popular misconception, JavaScript is not "Interpreted Java". In a nutshell, JavaScript is a dynamic scripting language supporting prototype based object construction. The basic syntax is intentionally similar to both Java and C++ to reduce the number of new concepts required to learn the language</p>
         </div>
        <div class="thumnail" >
             <img src="js.png" alt="img" class="imgfluid">
             
        </div>
        
    </section>
    <hr>
    <section class="section ">
        <div class="paras">
        <p class="sectiontag textbig">REACT-A JavaScript Library</p>
        <br><br>
        
        <p class="sectionsubtag textsmall">eact is a JavaScript library that specializes in helping developers build user interfaces, or UIs. In terms of websites and web applications, UIs are the collection of on-screen menus, search bars, buttons, and anything else someone interacts with to USE a website or app.efore React JS, developers were stuck building UIs by hand with “vanilla JavaScript” (developer speak for the raw JavaScript language on its own) or with less UI-focused React predecessors like jQuery. That meant longer development times and plenty of opportunities for errors and bugs. So, in 2011, Facebook engineer Jordan Walke created React JS specifically to improve UI development.

            In addition to providing reusable React library code (saving development time and cutting down on the chance for coding errors), React comes with two key features that add to its appeal for JavaScript developers:
            
            JSX
            Virtual DOM</p>
         </div>
        <div class="thumnail" >
             <img src="react.png" alt="img" class="imgfluid">
             
        </div>
    </section>
<hr>
    <section class="section">
        <div class="paras">
        <p class="sectiontag textbig">ANGULAR-A JavaScript Framework</p>
        <br><br>
        
        <p class="sectionsubtag textsmall">Angular is a platform and framework for building single-page client applications using HTML and TypeScript. Angular is written in TypeScript. It implements core and optional functionality as a set of TypeScript libraries that you import into your apps.

            The architecture of an Angular application relies on certain fundamental concepts. The basic building blocks of the Angular framework are Angular components that are organized into NgModules. NgModules collect related code into functional sets; an Angular app is defined by a set of NgModules. An app always has at least a root module that enables bootstrapping, and typically has many more feature modules.
            
            Components define views, which are sets of screen elements that Angular can choose among and modify according to your program logic and data.
            
            Components use services, which provide specific functionality not directly related to views. Service providers can be injected into components as dependencies, making your code modular, reusable, and efficient.
            
            Modules, components and services are classes that use decorators. These decorators mark their type and provide metadata that tells Angular how to use them.
            
            The metadata for a component class associates it with a template that defines a view.</p>
         </div>
        <div class="thumnail" >
             <img src="angular.png" alt="img" class="imgfluid">
             
        </div>
    </section>
    <hr>
    <section class="section">
        <div class="paras">
        <p class="sectiontag textbig">Vue.js-A JavaScript Framework</p>
        <br><br>
        
        <p class="sectionsubtag textsmall">If you’re at least somewhat familiar with front-end development, you’ve probably heard about React.

            It interacts with HTML documents via the so-called virtual DOM (i.e. a copy of the real DOM with all nodes represented as JavaScript objects) and follows a declarative style of programming. Its component-based approach gives you more speed and flexibility when building complex applications.
            
            Vue.js is another popular open-source framework for building complex UI.
            
            It improves on many concepts found in Angular and React.
            
            Vue is advertised as a progressive framework meaning you can migrate your existing projects one feature at a time. Depending on your needs, Vue scales between a lightweight library and a full-fledged framework.
            
            Like React, it uses components, two-way data binding, and virtual DOM.
            Over the last couple of years, Vue became extremely popular among developers and gained official support from Laravel.</p>
         </div>
        <div class="thumnail" >
             <img src="ReactvsVue.png" alt="img" class="imgfluid">
             
        </div>
        <div id="bottom"></div>
    </section>
    
    <section class="contact">
    <h2 class="textcenter">Contact us</h2>
    <form action="contact.php" method="POST">
    <div class="form">
        <div class="form-group">
            <label>Name:</label>
            <input class="forminput" type="text" name="name" id="name" placeholder="enter your name" class="form-control" required >
        </div>
        <div class="form-group">
            <label>email:</label>
                <input class="forminput" type="text" name="email" id="name" placeholder="enter your email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>        
                <input class="forminput" type="text" name="phoneno" id="name" placeholder="enter your phoneno">
        </div>
        <div class="form-group">
            <label>Comments:</label>
                <textarea class="forminput" name="text" id="text" cols="30" rows="10" required></textarea>
        </div>
        <p class="usersubmit">
            <input type="submit" name="submit" value="Send" >
          </p>
    </div>
    </section>
    <footer class="background">
        <p class="text">
        Copyright &copy; 2025 www.BEeducations.com   All right reserved ,Phone:8798879883
        </p>
<script src="js/resp.js"></script>
<div id="bottom"></div>
    
</body>
</html>