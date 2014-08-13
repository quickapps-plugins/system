<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>

<div class="row">
	<div class="col-md-6">
		<div class="btn-group filters">
			<?php
				echo $this->Html->link(__d('system', 'All') . ' <span class="badge"></span>', '#show-all', [
					'class' => 'btn btn-info btn-sm active',
					'escape' => false,
				]);
			?>
			<?php
				echo $this->Html->link(__d('system', 'Enabled') . ' <span class="badge">' . $enabled . '</span>', '#show-enabled', [
					'class' => 'btn btn-success btn-sm',
					'escape' => false,
				]);
			?>
			<?php
				echo $this->Html->link(__d('system', 'Disabled') . ' <span class="badge">' . $disabled . '</span>', '#show-disabled', [
					'class' => 'btn btn-warning btn-sm',
					'escape' => false,
				]);
			?>
		</div>
	</div>

	<div class="col-md-6 text-right">
		<?php
			echo $this->Html->link(__d('system', 'Install plugin'), [
				'plugin' => 'System',
				'controller' => 'plugins',
				'action' => 'install',
			], [
				'class' => 'btn btn-primary'
			]);
		?>
	</div>
</div>

<hr />

<div class="row">
	<div class="col-md-12 plugins-list">
		<?php foreach ($plugins as $info): ?>
			<?php echo $this->element('System.plugin_item', ['plugin' => $info]); ?>
		<?php endforeach; ?>
	</div>
</div>

<?php echo $this->Html->script('System.plugins.management.js'); ?>