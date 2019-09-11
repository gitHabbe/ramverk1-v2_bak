<?php

namespace Anax\View;

/**
 * Validate IP.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

<div class="validateIP">
    <h1>Validate IP</h1>
    <?php if ($res) : ?>
        <h4 class="validateResult"><?= $res ?></h4>
    <?php endif; ?>
    <p>Input an IP4 or IP6 to validate it's format</p>
    <form method="post" action="<?= url("validate/check") ?>">
        <fieldset>
            <legend> IP </legend>
            <!-- <label for="text">IP:</label> -->
            <input type="text" name="ip"><br>
            <button type="submit">Check ip</button>
        </fieldset>
    </form>
</div>
