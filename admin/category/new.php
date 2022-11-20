<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="forms-sample">
    <div class="form-group">
        <input type="text" class="form-control" name="cat_name" placeholder="category name">
    </div>
    <input type="hidden" name="action" value="act_insert">
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?action=act_list" class="btn btn-light">Cancel</a>
</form>