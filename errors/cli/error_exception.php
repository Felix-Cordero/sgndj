An uncaught Exception was encountered

Type:        <?= get_class($exception), "\n"; ?>
Message:     <?= $message, "\n"; ?>
Filename:    <?= $exception->getFile(), "\n"; ?>
Line Number: <?= $exception->getLine(); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKRACE === true): ?>

    Backtrace:
    <?php foreach ($exception->getTrace() as $error): ?>
        <?php if (isset($error['file'])): ?>
            <?= trim('-' . $error['line']) . ' _ ' . $error['file'] . '::' . $error['function'] . "\n" ?>
            <?php enfif ?>
        <?php endif ?>
        <?php endforeach ?>

<?php endif ?>