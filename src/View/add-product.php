<!-- <form method="post">
    <input type="text" name="name" placeholder="name" />
    <input type="text" name="type" placeholder="type" />
    <input type="number" name="price" placeholder="price" />
    <input type="number" name="amount" placeholder="amount" />
    <input type="date" name="date" placeholder="date" />
    <textarea name="desc" placeholder="description"></textarea>
    <button type="submit">Add</button>
</form> -->

<div id="container-book" class="container">
    <h3 id="book-h3">Add Product</h3>
    <form method="post" class="was-validated">
        <div class="form-group">
            <label for="uname">Name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Type:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter type" name="type" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Price:</label>
            <input type="number" class="form-control" id="uname" placeholder="Enter price" name="price" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Amount:</label>
            <input type="number" class="form-control" id="uname" placeholder="Enter amount" name="amount" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Date:</label>
            <input type="date" class="form-control" id="uname" placeholder="Enter date" name="date" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Description:</label>
            <textarea class="form-control" id="uname" placeholder="Enter description" name="desc" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button id="add-all" type="submit" class="btn btn-primary">Add Product</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>