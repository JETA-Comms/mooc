<style>
    /* Error section */
.error {
    width: 100%;
    margin: 10px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}


/* Success Section */

.success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}
</style>


<?php 

    if (count($errors) > 0):
?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?php echo "$error"; ?></p>

            <?php endforeach ?>
        </div>

<?php endif ?>
