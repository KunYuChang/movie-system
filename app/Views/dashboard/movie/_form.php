<p>
    <label for="title">標題</label>
    <input id="title" type="text" name="title" placeholder="輸入標題" value="<?= old('title', $movie->title) ?>">
</p>
<p>
    <label for="description">描述</label>
    <textarea name="description" id="description">
        <?= old('description',$movie->description) ?>
    </textarea>
</p>
<p>
    <button>送出</button>
</p>