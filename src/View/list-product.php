<h1>Danh sách mặt hàng</h1>

<div class="container">
    <div class="row">
        <form id="form-search" method="post" action="index.php?page=search-product">
            <input type="text" name="keyword" placeholder="nhập từ khóa" />
            <button class="btn btn-secondary" type="submit">Tìm kiếm</button>
        </form>
        <div class="col-md-3">
            <a class="btn btn-secondary" href="index.php?page=add-product"><i class="fas fa-user-plus"></i> &nbsp;Thêm mặt hàng</a>
        </div>
    </div>
    <table class="table table-striped text-center">
        <tr class="bg-success">
            <th scope="col">#</th>
            <th scope="col">Tên hàng</th>
            <th scope="col">Loại hàng</th>
            <th scope="col" colspan="2"></th>
        </tr>
        <?php if (empty($products)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else : ?>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $product->getName(); ?></td>
                    <td><?php echo $product->getType(); ?></td>
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId(); ?>"><i class="fas fa-user-edit"></i>&nbsp;Update</a></td>
                    <td><a href="index.php?page=delete-product&id=<?php echo $product->getId(); ?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                            </svg>&nbsp;Delete</a></td>
                </tr>

            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>