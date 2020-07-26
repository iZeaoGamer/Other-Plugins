<?php
namespace ifteam\Farms;

use pocketmine\scheduler\Task;

class FarmsTask extends Task {
	public function __construct(Farms $plugin) {
		$this->plugin = $plugin;
	}
	public function onRun(int $currentTick) {
		$this->plugin->tick();
	}
}
