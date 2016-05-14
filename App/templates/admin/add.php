<h2>Добавить новую статью</h2>
<div class="col-md-6">


    <form class="form-horizontal" method="post">
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label" for="textinput">Title</label>
                <div class="">
                    <input id="textinput" name="title" type="text" placeholder="placeholder" value="<?= $news->title ?>"
                           class="form-control input-md ">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label" for="textinput">Author</label>
                <div class="">
                    <input id="textinput" name="author" type="text" value="<?= $news->author->name ?>"
                           placeholder="author" class="form-control input-md">
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="control-label" for="textarea">Content</label>
                <div class="">
                    <textarea class="form-control" cols="30" rows="10" id="textarea"
                              name="content"><?= $news->content ?></textarea>
                </div>
            </div>


            <!-- Button (Double) -->
            <div class="form-group">
                <div class="">
                    <button id="button1id" name="add" class="btn btn-success">Add</button>
                    <button id="button2id" name="cancel" class="btn btn-danger">Cancel</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
