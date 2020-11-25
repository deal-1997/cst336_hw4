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
                    <img src="img/java.jpg" height="450">    
                </figure>
                <div>
                   <p>Hello <%= randomName %>!</p>
                  <p>Java is a class-based, object-oriented 
            programming language that is designed to 
            have as few implementation dependencies as 
            possible. James Gosling is the creator of Java, which
            now has been accquired from Oracle. It is a general-purpose programming 
            language intended to let application developers 
            write once, run anywhere WORA,meaning 
            that compiled Java code can run on all 
            platforms that support Java without the need 
            for recompilation. Java applications are 
            typically compiled to bytecode that can run on 
            any Java virtual machine regardless of 
            the underlying computer architecture. 
            The syntax of Java is similar to C and C++, 
            but has fewer low-level facilities than either 
            of them. The Java runtime provides dynamic 
            capabilities such as reflection and runtime 
            code modification that are typically not 
            available in traditional compiled languages</p>
                <br /><br />
                </div>
            </main>
<%- include('partials/footer.ejs') %>