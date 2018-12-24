<?php
namespace jasonwynn10\CrossOnlineCount;

use pocketmine\scheduler\Task;

class UpdateTask extends Task {
	public function onRun(int $currentTick) {
		$this->getOwner()->update();
	}
}
