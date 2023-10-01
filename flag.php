<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Notification</title>

    <!-- Add your CSS styles here -->
    <style>
        /* Notification container styles */
        .notification-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        /* Notification styles */
        .notification {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
            display: none;
        }

        .notification.error {
            background-color: #f44336;
        }

        /* Notification badge styles */
        .notification-badge {
            background-color: red;
            color: white;
            padding: 4px 8px;
            border-radius: 50%;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <!-- Third Code Block -->
    <div class="code-block">
        <?php
        // Check if 'loginName' and 'church' exist in the URL
        if (isset($_GET['loginName']) && isset($_GET['church'])) {
            $loginName = $_GET['loginName'];
            $church = $_GET['church'];
        } else {
            // Handle the case where 'loginName' or 'church' is not in the URL
            $loginName = ''; // You can set it to a default value or handle the error accordingly
            $church = '';
        }

        // Check the session variable for birthday wishes
        session_start();
        $hasBirthdayWishes = isset($_SESSION['hasBirthdayWishes']) ? $_SESSION['hasBirthdayWishes'] : false;
        ?>
        <li class="nav-item">
            <a href="birthday.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
                <i class="fa fa-birthday-cake" style="font-size: 14px;"></i> BIRTHDAY
                <?php
                // Display the notification badge only if there are birthday wishes
                if ($hasBirthdayWishes) {
                    echo '<span class="notification-badge">1</span>';
                }
                ?>
            </a>
        </li>
    </div>

    <!-- JavaScript code for pop-up notification -->
    <script>
        function showPopupNotification(message) {
            // Create a modal or pop-up element
            const popup = document.createElement('div');
            popup.className = 'notification';
            popup.textContent = message;

            // Add the modal to the document body
            document.body.appendChild(popup);

            // Add a close button to the modal
            const closeButton = document.createElement('button');
            closeButton.textContent = 'Close';
            closeButton.addEventListener('click', function () {
                // Remove the modal when the close button is clicked
                document.body.removeChild(popup);
            });

            // Append the close button to the modal
            popup.appendChild(closeButton);
        }

        // Example usage:
        <?php
        // Check the session variable for birthday wishes
        if ($hasBirthdayWishes) {
            echo "showPopupNotification('You have birthday wishes!');";
        }
        ?>
    </script>
</body>
</html>
