<?php

namespace Acamposm\Ping\Tests;

use Acamposm\Ping\Timer;
use PHPUnit\Framework\TestCase;

class TimerTest extends TestCase
{
	/** @test */
	public function isTimerClass()
	{
		$timer = New Timer();

		$this->assertInstanceOf(Timer::class, $timer);
	}

	/** @test */
	public function canStartTimer()
	{
		$timer = New Timer();

		$this->assertIsFloat($timer->Start());
	}

	/** @test */
	public function canStopTimer()
	{
		$timer = New Timer();

		$timer->Start();

		$this->assertIsFloat($timer->Stop());
	}

	/** @test */
	public function getTimerGreaterThan()
	{
		$timer = New Timer();

		$start = $timer->Start();

		usleep(500000);

		$stop = $timer->Stop();

		$this->assertGreaterThan($start, $stop);
	}

	/** @test */
	public function getTimerResults()
	{
		$timer = New Timer();

		$start = $timer->Start();

		$stop = $timer->Stop();

		$this->assertIsObject($timer->GetResults());
	}

    /** @test */
    public function GetResultsWithOutStoppingTimer()
    {
		$timer = New Timer();

		$start = $timer->Start();

		$this->assertIsObject($timer->GetResults());
    }
}
