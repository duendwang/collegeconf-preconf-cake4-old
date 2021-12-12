<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceEvent $conferenceEvent
 * @var \Cake\Collection\CollectionInterface|string[] $conferences
 * @var \Cake\Collection\CollectionInterface|string[] $events
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conference Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceEvents form content">
            <?= $this->Form->create($conferenceEvent) ?>
            <fieldset>
                <legend><?= __('Add Conference Event') ?></legend>
                <?php
                    echo $this->Form->control('conference_id', ['options' => $conferences]);
                    echo $this->Form->control('event_id', ['options' => $events]);
                    echo $this->Form->control('notes');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('modifier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
