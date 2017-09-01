<ul class="help">
    <li>You can use <a href="#" data-toggle="modal" data-target="#bbcode-modal">BBCodes</a> and <a href="#" data-toggle="modal" data-target="#emoji-modal">Emoticons</a>.</li>
    <li>URLs will be conveted into clickable links.</li>
    <li>Image URLs will be conveted into actual images.</li>
    <li>URLs from YouTube, Facebook, Twitter, <a href="http://s9etextformatter.readthedocs.org/Plugins/MediaEmbed/Sites/" target="_blank">etc.</a> will be embedded.</li>
    <li>Markdown and live comments are not enabled for this demo.</li>
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
                            <td>
                                <del><span>[url]</span>http://example.org<span>[/url]</span></del><br>
                                Auto link already enabled.
                            </td>
                            <td><a href="http://example.org">http://example.org</a></td>
                        </tr>
                        <tr>
                            <td>
                                <del><span>[img]</span>https://i.imgur.com/5hueFdG.png<span>[/img]</span></del><br>
                                Auto image already enabled.
                            </td>
                            <td><img src="https://i.imgur.com/5hueFdG.png"></td>
                        </tr>
                        <tr>
                            <td><span>[code=php]</span>&lt;?php echo 'Hello!'; ?&gt;<span>[/code]</span></td>
                            <td><pre><code class="language-php">&lt;?php echo 'Hello!'; ?&gt;</code></pre></td>
                        </tr>
                        <tr>
                            <td><span>[quote]</span>quoted text<span>[/quote]</span></td>
                            <td><blockquote>quoted text</blockquote></td>
                        </tr>
                        <tr>
                            <td>
                                <span>[list]</span><br>
                                [*]Entry 1 <br>
                                [*]Entry 2 <br>
                                <span>[/list]</span>
                            </td>
                            <td>
                                <ul>
                                    <li>Entry 1</li>
                                    <li>Entry 2</li>
                                </ul>
                            </td>
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

<div class="modal fade" id="emoji-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                <h4 class="modal-title">Emoticons</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>:)</td>
                        <td>&#x1f604;</td>
                        <td>:D</td>
                        <td>&#x1f603;</td>
                    </tr>
                    <tr>
                        <td>:P</td>
                        <td>&#x1f61c;</td>
                        <td>:(</td>
                        <td>&#x1f61f;</td>
                    </tr>
                    <tr>
                        <td>:|</td>
                        <td>&#x1f610;</td>
                        <td>;)</td>
                        <td>&#x1f609;</td>
                    </tr>
                    <tr>
                        <td>:*</td>
                        <td>&#x1f618;</td>
                        <td>:&#039;(</td>
                        <td>&#x1f622;</td>
                    </tr>
                    <tr>
                        <td>:&#039;)</td>
                        <td>&#x1f602;</td>
                        <td>:O</td>
                        <td>&#x1f62e;</td>
                    </tr>
                    <tr>
                        <td>B)</td>
                        <td>&#x1f60e;</td>
                        <td>&gt;:(</td>
                        <td>&#x1f621;</td>
                    </tr>
                </table>

                <p>Or <a href="http://getemoji.com/" target="_blank">copy and paste</a> Emoji Unicode characters.</p>
            </div>
        </div>
    </div>
</div>

