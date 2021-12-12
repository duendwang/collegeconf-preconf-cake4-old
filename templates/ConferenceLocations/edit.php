<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocation $conferenceLocation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferenceLocation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferenceLocation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conference Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocations form content">
            <?= $this->Form->create($conferenceLocation) ?>
            <fieldset>
                <legend><?= __('Edit Conference Location') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
