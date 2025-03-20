<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    

    <style>
    :root {
        --primary-color: #2962ff;
        --secondary-color: #455a64;
        --background: #f8f9fa;
        --text-color: #212529;
    }

    body {
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        line-height: 1.6;
        background-color: var(--background);
        color: var(--text-color);
        margin: 0;
        padding: 2rem;
        min-height: 100vh;
    }

    .container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease;
    }

    h1 {
        color: var(--primary-color);
        font-size: 2.5rem;
        margin-bottom: 2rem;
        text-align: center;
        font-weight: 600;
    }

    form {
        display: grid;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    label {
        font-weight: 500;
        color: var(--secondary-color);
        font-size: 0.9rem;
        margin-left: 0.5rem;
    }

    input,
    textarea {
        padding: 0.8rem 1rem;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(41, 98, 255, 0.1);
    }

    textarea {
        resize: vertical;
        min-height: 120px;
    }

    button[type="submit"] {
        background-color: var(--primary-color);
        color: white;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s ease, background-color 0.3s ease;
        width: fit-content;
        margin: 0 auto;
    }

    button[type="submit"]:hover {
        background-color: #1565c0;
        transform: translateY(-1px);
    }

    @media (max-width: 768px) {
        .container {
            margin: 1rem;
            padding: 1.5rem;
        }

        h1 {
            font-size: 2rem;
        }
    }

    /* SweetAlert2 customization */
    .swal2-popup {
        border-radius: 12px !important;
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif !important;
    }

    /* Animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .container {
        animation: fadeIn 0.4s ease-out;
    }
</style>

</head>
<body>
    <div class="container">
    <h1>Contact Us</h1>
    
    <form method="post" action="send-email.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <button type="submit" name="submitContact">Send</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   
    <script>
     var messageText = "<?= $_SESSION['status'] ?? ''  ?>";

     if(messageText != ''){
    Swal.fire({
  title: "Thankyou",
  text: messageText,
  icon: "success"
});
<?php  unset($_SESSION['status']); ?>
     }
</script>
</body>
</html>