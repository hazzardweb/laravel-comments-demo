<ul class="help">
    <li><a href="#" data-toggle="modal" data-target="#bbcode-modal">BBCode Tags</a></li>
    <li><a href="#" data-toggle="modal" data-target="#smilies-modal">Emoticons Codes</a></li>
</ul>

<div class="modal fade" id="bbcode-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                <h4 class="modal-title">BBCode Tags</h4>
            </div>
            <div class="modal-body">
                <table class="table bbcodes">
                    <thead>
                        <tr>
                            <th>BBCode</th>
                            <th>Rendering</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>[b]</span>bolded text<span>[/b]</span></td>
                            <td><b>bolded text</b></td>
                        </tr>
                        <tr>
                            <td><span>[i]</span>italicized text<span>[/i]</span></td>
                            <td><i>italicized text</i></td>
                        </tr>
                        <tr>
                            <td><span>[u]</span>underlined text<span>[/u]</span></td>
                            <td><u>underlined text</u></td>
                        </tr>
                        <tr>
                            <td><span>[url]</span>http://example.org<span>[/url]</span></td>
                            <td><a href="http://example.org">http://example.org</a></td>
                        </tr>
                        <tr>
                            <td><span>[url=http://example.com]</span>Example<span>[/url]</span></td>
                            <td><a href="http://example.com">Example</a></td>
                        </tr>
                        <tr>
                            <td><span>[img]</span>http://i.imgur.com/5hueFdG.png<span>[/img]</span></td>
                            <td><img src="http://i.imgur.com/5hueFdG.png"></td>
                        </tr>
                        <tr>
                            <td><span>[code=php]</span>&lt;?php echo 'Hello!'; ?&gt;<span>[/php]</span></td>
                            <td><pre><code class="language-php">&lt;?php echo 'Hello!'; ?&gt;</code></pre></td>
                        </tr>
                        <tr>
                            <td><span>[quote]</span>quoted text<span>[/quote]</span></td>
                            <td><blockquote>quoted text</blockquote></td>
                        </tr>
                        <tr>
                            <td><span>[youtube]</span>N8ZAx_OvKpM<span>[/youtube]</span></td>
                            <td><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N8ZAx_OvKpM?rel=0&amp;showinfo=0" allowfullscreen=""></iframe></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="smilies-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                <h4 class="modal-title">Emoticons Codes</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <?php
                    app('comments');
                    $smilies = app('comments.formatter')->getSmilies();
                    $images = $smilies->getSmilies();
                    $i = 1;
                    ?>
                    @foreach ($images as $smiley => $image)
                    <?php $i++; if ($i % 2) continue; ?>
                        <tr>
                            <td>{!! $smilies->getImage($smiley) !!}</td>
                            <td>{{ $smiley }}</td>
                            <?php $smiley = array_search(next($images), $images); ?>
                            <td>{!! $smilies->getImage($smiley) !!}</td>
                            <td>{{ $smiley }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .help {
        margin-top: 20px;
        padding-left: 0px;
        list-style-type: none;
    }
    .help img {
        vertical-align: top;
    }
    .bbcodes td span:not(.token) {
        color: #008000;
        font-weight: bold;
    }
</style>
