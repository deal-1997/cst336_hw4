<%- include('partials/header.ejs') %>
            
            <p align:"center"></p>
            <a href="index.php">Home</a>
            <a href="c++.php">C++</a>
            <a href="javascript.php">JavaScript</a>
            <a href="python.php">Python</a>
            <a href="java.php">Java</a>
            <p align="center">       
            </nav>
            <br /><br />
            <main>
                <figure>
                    <img src="img/programminglanguages.jpg" height="450">    
                </figure>
                <div>
                  <p>Hello <%= randomName %>!</p>
                  <p> Hover over above each programming languages to learn more about them
            that gives exclusive information about how each of them functions 
            and in depth look and how it all started and what do they bring
            to programmers. To give a general overview, programming languages 
            are applications that gives computer devices a freelance variety 
            of completing various tasks based on how the language operates and 
            what the language contains within the applications that has to offer.</p>
                <br /><br />
                </div>
            </main>
<%- include('partials/footer.ejs') %>
