<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConferenceLocalityRegistrationStep $conferenceLocalityRegistrationStep
 * @var \Cake\Collection\CollectionInterface|string[] $conferenceLocalities
 * @var \Cake\Collection\CollectionInterface|string[] $registrationSteps
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conference Locality Registration Steps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferenceLocalityRegistrationSteps form content">
            <?= $this->Form->create($conferenceLocalityRegistrationStep) ?>
            <fieldset>
                <legend><?= __('Add Conference Locality Registration Step') ?></legend>
                <?php
                    echo $this->Form->control('conference_locality_id', ['options' => $conferenceLocalities]);
                    echo $this->Form->control('registration_step_id', ['options' => $registrationSteps]);
                    echo $this->Form->control('completed');
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
