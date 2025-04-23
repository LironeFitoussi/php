<ul class="name-list space-y-2">
    <?php foreach($names AS $name): ?>
        <li class="name-item">
            <a href="name.php?<?php echo http_build_query(['name' => $name]); ?>" class="name-link">
                <?php echo e($name); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Pagination -->
 <?php if ($totalPages > 1): ?>
    <div class="pagination flex gap-2 mt-6 flex-wrap">
        <?php if ($page > 1): ?>
            <a href="char.php?<?php echo http_build_query(['char' => $char, 'page' => $page - 1]); ?>" class="page-number">
                &lt; Previous
            </a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i === $page): ?>
                <span class="page-number active-page"><?php echo e($i); ?></span>
            <?php else: ?>
                <a href="char.php?<?php echo http_build_query(['char' => $char, 'page' => $i]); ?>" class="page-number">
                    <?php echo e($i); ?>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($page < $totalPages): ?>
            <a href="char.php?<?php echo http_build_query(['char' => $char, 'page' => $page + 1]); ?>" class="page-number">
                Next &gt;
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>