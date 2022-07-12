<?php

use PHPStan\Rules\Rule;

class MyService implements Rule {
	public function getNodeType(): string {
		return \PhpParser\Node::class;
	}

	public function processNode(mixed $node, mixed $scope): array {
		return [];
	}
}