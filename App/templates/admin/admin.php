<div class="col-md-12">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>ID</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        <?php foreach ($news as $new): ?>
            <tr>
                <td><?= $i ?></td>

                <td><?= $new->title ?></td>
                <td><?= $new->author ?></td>
                <td><?= $new->id ?></td>
                <td><a href="/admin/edit/<?= $new->id ?>">Edit</a></td>
                <td><a href="/admin/delete/<?= $new->id ?>">Delete</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/admin/add">
        <button type="button" class="btn btn-success" name="add">Add new article</button>
    </a>
</div>
