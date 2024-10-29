p<!DOCTYPE html>
<html lang="en">
<body>
    
<?php
    // Initialize feedback array 
    $feedbackArray = [];                          

    // to handle form submission
    function handleFormSubmission() {
        global $feedbackArray;                                            

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];                                                      
            $pos = $_POST["PoS"];
            $future = $_POST["future"];
            $improvement = $_POST["improve"];

            // store feedback to the assoc.array
            $feedbackArray[] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'pos' => $pos,                              
                'future' => $future,
                'imp' => $improvement
            ];
        }
    }

    // to display feedback
    function displayFeedback() {                              
        global $feedbackArray;                          

        if (!empty($feedbackArray)) {
            echo "<h2>Thank you for the feedback!</h2>";
            echo "<ul>";                                                  
            foreach ($feedbackArray as $feedback) {
                
                echo "<strong>Personal Details</strong>" ."<br>";                                 
                echo "------------------------------"."<br><br>";
                echo "<strong>Full Name:</strong> " . $feedback['name'] . "<br><br>";
                echo "<strong>Email:</strong> " . $feedback['email'] . "<br><br>";
                echo "<strong>Phone number:</strong> " . $feedback['phone']."<br><br>";
                echo "<strong>Feedback:</strong> "."<br>";
                echo "------------------------------"."<br><br>";
                echo "<strong>Product/Service:</strong> " . $feedback['pos']."<br><br>";
                echo "<strong>Would you use our product/service in the future:</strong> " . $feedback['future']."<br><br>";
                echo "<strong>How can we improve our product/service:</strong> " . $feedback['imp'];

            }
            echo "</ul>";
        }
    }

    // Call functions
    handleFormSubmission();             
    displayFeedback();                  
    ?>
</body>
</html>