<!DOCTYPE html>
<html>
<head>
    <title>IF YOU NEED HELP. PHP IS THE PLACE TO BE!!!</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>IF YOU NEED HELP. PHP IS THE PLACE TO BE!!!</h1>
    <form action="display_results.php" method="post">

    <fieldset>
    <legend>Account Sign Up</legend>
    <p>There's only 1 rule to accept helpful information from this site. Your MUST enter a COOL username!</p>
        <label>Password:</label>
        <input type="password" name="password" value="" class="textbox">
        <br>

        <label>Username:</label>
        <input type="text" name="username" value="" class="textbox">
        <br>

        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox">
        <br>

    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="My friend E.T">
        Somewhere in space<br>
        <input type="radio" name="heard_from" value="My Dentist">
        Word of mouth<br>
        <input type=radio name="heard_from" value="I overheard my dog telling the turtle down the street.">
        Animals of the Earth<br>

        <p>Cookie Settings:</p>
        <br>
        <p>We use cookie settings to help personalize your collected data to help provide similar ads and more information that could possibly help you in the future all for free!</p>
        <br><p>Would you like a taste of these delicious cookies?</p>
        <input type="checkbox" name="wants_updates">YES! Please bring the milk!<br>
        <input type="checkbox" name="wants_updates">NO thanks, I'm on a diet, but my pockets eating cheese cake! Only Nicki Minaj fans understand.<br>

        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>

        <p>Comments: What's the tea sis? What's the tea bro? I need you to tell me the tea while it's still HOT! We're waiting for you!</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>    
    </main>
</body>
</html>