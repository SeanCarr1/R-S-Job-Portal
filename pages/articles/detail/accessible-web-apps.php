<?php
include(__DIR__ . '/accessible-web-apps.logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carr Tech Crunch</title>
    <link rel="icon" type="image/png" href="/OnlineTech/assets/images/logo.png">
    <link rel="stylesheet" href="../articles.css">
</head>
<body>
<?php include(__DIR__ . '/../../../includes/navbar/navbar.php'); ?>
<section class="main-content articles-section col-span-12">
    <div class="article-detail-header">
        <h1 class="articles-title">Building Accessible Web Applications: Best Practices</h1>
        <div class="article-card-meta">
            <span class="article-card-category">Web Development</span>
            <span class="article-card-category">Accessibility</span>
        </div>
        <div class="article-card-footer">
            <span class="article-card-author">Sean Carr</span>
            <span class="article-card-date">30 May 2026</span>
        </div>
    </div>
    <div class="article-detail-image" style="width:100%;max-width:700px;margin:2rem auto 2rem auto;">
        <img src="/OnlineTech/assets/images/article2.jpg" alt="Accessible Web Applications" style="width:100%;border-radius:16px;object-fit:cover;">
    </div>
    <article class="article-detail-content" style="max-width:700px;margin:0 auto;">
        <div class="article-block-flex">
            <h2>Introduction</h2>
            <p>
                Accessibility is about making web applications usable for everyone, including people with disabilities. By following accessibility best practices, you not only comply with legal standards but also improve usability and reach a wider audience. This article covers essential strategies and tools for building accessible web apps.
            </p>
        </div>
        <div class="article-block-flex">
            <h2>Semantic HTML</h2>
            <p>
                Use semantic HTML elements (<code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code>, etc.) to provide structure and meaning. Screen readers rely on these elements to navigate and interpret content.
            </p>
            <ul>
                <li>Use headings (<code>&lt;h1&gt;</code>–<code>&lt;h6&gt;</code>) to create a logical document outline.</li>
                <li>Label forms with <code>&lt;label&gt;</code> elements.</li>
                <li>Use lists (<code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>) for grouped items.</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>Color Contrast</h2>
            <p>
                Ensure sufficient contrast between text and background. Poor contrast can make content unreadable for users with visual impairments.
            </p>
            <ul>
                <li>Use tools like <a href="https://webaim.org/resources/contrastchecker/" target="_blank" rel="noopener">WebAIM Contrast Checker</a> to verify contrast ratios.</li>
                <li>Follow WCAG guidelines: minimum 4.5:1 for normal text, 3:1 for large text.</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>Keyboard Navigation</h2>
            <p>
                All interactive elements should be accessible via keyboard. Users who cannot use a mouse rely on keyboard navigation.
            </p>
            <ul>
                <li>Use <code>tabindex</code> to control tab order.</li>
                <li>Ensure buttons, links, and form fields are focusable.</li>
                <li>Provide visible focus indicators (e.g., outlines or highlights).</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>ARIA (Accessible Rich Internet Applications)</h2>
            <p>
                ARIA attributes enhance accessibility for dynamic content and custom UI components. Use them to provide additional context to assistive technologies.
            </p>
            <ul>
                <li><code>aria-label</code>, <code>aria-labelledby</code>, and <code>aria-describedby</code> for labeling elements.</li>
                <li><code>role</code> attributes to define element purpose (e.g., <code>role="button"</code>).</li>
                <li>Use ARIA only when native HTML is insufficient.</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>Screen Reader Support</h2>
            <p>
                Test your application with screen readers (NVDA, JAWS, VoiceOver) to ensure content is announced correctly and navigation is logical.
            </p>
            <ul>
                <li>Use skip links to allow users to bypass repetitive navigation.</li>
                <li>Test dynamic content updates (e.g., modals, alerts) for proper announcements.</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>Testing Tools</h2>
            <p>
                Use automated and manual tools to identify and fix accessibility issues.
            </p>
            <ul>
                <li><a href="https://wave.webaim.org/" target="_blank" rel="noopener">WAVE</a> and <a href="https://www.deque.com/axe/" target="_blank" rel="noopener">axe</a> for automated testing.</li>
                <li>Browser DevTools for inspecting accessibility tree and ARIA attributes.</li>
                <li>Manual testing with keyboard and screen readers.</li>
            </ul>
        </div>
        <div class="article-block-flex">
            <h2>Conclusion</h2>
            <p>
                Building accessible web applications is an ongoing process that benefits all users. By following these best practices, you create more inclusive, usable, and successful products.
            </p>
        </div>
        <div class="article-block-flex" style="background:#181c24;">
            <h2>Further Reading</h2>
            <div style="display:flex;flex-wrap:wrap;gap:2rem;">
                <div style="display:flex;align-items:center;gap:1rem;background:#232b3b;border-radius:10px;padding:1.2rem 2rem;min-width:260px;flex:1;">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/visible--v1.png" alt="WebAIM" style="width:38px;height:38px;">
                    </div>
                    <div>
                        <h4 style="margin:0 0 0.2em 0;">WebAIM</h4>
                        <p style="margin:0 0 0.2em 0;font-size:1em;">Accessibility articles and tools</p>
                        <a href="https://webaim.org/" target="_blank" rel="noopener" class="article-card-link">Visit WebAIM &rarr;</a>
                    </div>
                </div>
                <div style="display:flex;align-items:center;gap:1rem;background:#232b3b;border-radius:10px;padding:1.2rem 2rem;min-width:260px;flex:1;">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/keyboard.png" alt="Deque University" style="width:38px;height:38px;">
                    </div>
                    <div>
                        <h4 style="margin:0 0 0.2em 0;">Deque University</h4>
                        <p style="margin:0 0 0.2em 0;font-size:1em;">In-depth accessibility training</p>
                        <a href="https://dequeuniversity.com/" target="_blank" rel="noopener" class="article-card-link">Visit Deque &rarr;</a>
                    </div>
                </div>
                <div style="display:flex;align-items:center;gap:1rem;background:#232b3b;border-radius:10px;padding:1.2rem 2rem;min-width:260px;flex:1;">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/checked-checkbox.png" alt="WCAG Guidelines" style="width:38px;height:38px;">
                    </div>
                    <div>
                        <h4 style="margin:0 0 0.2em 0;">WCAG Guidelines</h4>
                        <p style="margin:0 0 0.2em 0;font-size:1em;">Official accessibility standards</p>
                        <a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank" rel="noopener" class="article-card-link">Read WCAG &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section class="comments-section" id="comments-section">
        <h2>Comments</h2>
        <div id="comments-list" aria-live="polite">
            <?php if (count($comments) === 0): ?>
                <p>No comments yet.</p>
            <?php else: ?>
                <?php foreach ($comments as $c): ?>
                    <div class="comment-block">
                        <div class="comment-author">
                            <?php echo htmlspecialchars($c['username']); ?>
                        </div>
                        <div class="comment-text">
                            <?php echo nl2br(htmlspecialchars($c['comment_text'])); ?>
                        </div>
                        <div class="comment-date">
                            <?php echo htmlspecialchars($c['created_at']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <form id="comment-form" method="post" class="comment-form-container">
            <label for="comment_text" class="comment-form-label">Add a comment</label>
            <textarea id="comment_text" name="comment_text" rows="4" class="comment-form-textarea" placeholder="Share your thoughts..." required></textarea>
            <div class="comment-form-actions">
                <button type="submit" class="comment-form-submit">Post Comment</button>
                <span class="comment-form-feedback<?php if ($comment_success) echo ' success'; elseif ($comment_error) echo ' error'; ?>">
                <?php if ($comment_success): ?>
                    Comment posted!
                <?php elseif ($comment_error): ?>
                    <?php echo htmlspecialchars($comment_error); ?>
                <?php endif; ?>
                </span>
            </div>
        </form>
    </section>
</section>
<?php include(__DIR__ . '/../../../includes/footer/footer.php'); ?>
</body>
</html>