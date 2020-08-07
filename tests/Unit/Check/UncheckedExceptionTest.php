<?php declare(strict_types = 1);

namespace Tests\Orisai\Exceptions\Unit\Check;

use Orisai\Exceptions\Logic\Deprecated;
use Orisai\Exceptions\Logic\InvalidArgument;
use Orisai\Exceptions\Logic\InvalidState;
use Orisai\Exceptions\Logic\NotImplemented;
use Orisai\Exceptions\Logic\ShouldNotHappen;
use PHPStan\Testing\TestCase;

final class UncheckedExceptionTest extends TestCase
{

	public function testDeprecatedException(): void
	{
		$this->expectException(Deprecated::class);
		$this->expectExceptionCode(666);
		$this->expectExceptionMessage('test');

		throw new Deprecated('test', 666);
	}

	public function testInvalidArgumentException(): void
	{
		$this->expectException(InvalidArgument::class);
		$this->expectExceptionCode(666);
		$this->expectExceptionMessage('test');

		throw new InvalidArgument('test', 666);
	}

	public function testInvalidStateException(): void
	{
		$this->expectException(InvalidState::class);
		$this->expectExceptionCode(666);
		$this->expectExceptionMessage('test');

		throw new InvalidState('test', 666);
	}

	public function testNotImplementedException(): void
	{
		$this->expectException(NotImplemented::class);
		$this->expectExceptionCode(666);
		$this->expectExceptionMessage('test');

		throw new NotImplemented('test', 666);
	}

	public function testShouldNotHappenException(): void
	{
		$this->expectException(ShouldNotHappen::class);
		$this->expectExceptionCode(666);
		$this->expectExceptionMessage('test');

		throw new ShouldNotHappen('test', 666);
	}

}
