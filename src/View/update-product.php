

<div id="container-book" class="container">
    <h3 id="book-h3">Update Product</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Name:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['name']; ?>" placeholder="Enter name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Type:</label>
            <input type="text" class="form-control" id="uname" value="<?php echo $product['type']; ?>"  placeholder="Enter type" name="type" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Price:</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $product['price']; ?>"  placeholder="Enter price" name="price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Amount:</label>
            <input type="number" class="form-control" id="uname" value="<?php echo $product['amount']; ?>" placeholder="Enter amount" name="amount" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Date:</label>
            <input type="date" class="form-control" id="uname" value="<?php echo $product['date']; ?>" placeholder="Enter date" name="date" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Description:</label>
            <textarea class="form-control" id="uname" placeholder="Enter description" name="desc" required><?php echo $product['description']; ?></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button id="add-all" type="submit" class="btn btn-primary">Update Product</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>