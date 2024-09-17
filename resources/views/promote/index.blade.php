@extends('layouts.promote')
@section('search.target',route('promote.index'))
@section('content')

    <!-- HERO -->
	<section class="relative bg-gradient-to-r from-violet-50 to-orange-50">
		<!-- BG Image -->
		<!-- <img src="https://plus.unsplash.com/premium_photo-1683121696175-d05600fefb85?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="absolute -z-10 inline-block h-full w-full object-cover opacity-75" /> -->
		<!-- Container -->
		<div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
			<!-- Component -->
			<div class="grid grid-cols-1 items-center gap-8 sm:gap-20 lg:grid-cols-2">
				<!-- Heading Content -->
				<div class="max-w-[720px]">
					<h1 class="mb-3 pb-4 text-4xl font-bold text-[#AF8260] md:text-5xl">SmallDog Milk Tea</h1>
					<p class="mb-6 max-w-[528px] text-xl md:mb-10 font-sans">ที่ SmallDog Milk Tea
						เรามอบความอร่อยแบบพิเศษในทุกแก้ว เพราะเราคัดสรรวัตถุดิบอย่างดีและใส่ใจในทุกขั้นตอนการทำ
						เพื่อให้คุณได้สัมผัสถึงความหวานหอมในทุกครั้งที่ดื่ม</p>
					<div class="flex items-center">
						<a href="{{ route('promote.menu') }}"
							class="] mr-5 inline-block rounded-full bg-purple-300 px-6 py-4 text-center font-bold text-black transition hover:border-black hover:bg-white md:mr-6 lg:mr-8">สั่งเลย</a>
					</div>
				</div>
				<!-- Image Div -->
				<div>
					<img src="{{asset('promote/img/294707214_470543355074443_5115450028947028165_n.jpg')}}"
						class=" mx-auto inline-block h-full w-full max-w-[640px] rounded-2xl object-cover" />
				</div>
			</div>
		</div>
	</section>
	<!-- HERO -->

	<!-- ====== Portfolio Section Start -->
	<section x-data="
	   {
	   showCards: 'all',
	   activeClasses: 'bg-violet-50 text-[#AF8260]',
	   inactiveClasses: 'text-body-color dark:text-dark-6 hover:bg-primary hover:text-[#959191]',
	   }
	   " class="pt-20 pb-12 lg:pt-[120px] bg-[#FCEEE0]">
		<div class="container mx-auto font-san">
			<div class="-mx-4 flex flex-wrap">
				<div class="w-full px-4">
					<div class="mx-auto mb-[60px] max-w-[510px] text-center">
						<h2 class="text-dark mb-3 text-3xl leading-[1.208] sm:text-4xl md:text-[40px]">
							Menu
						</h2>
						<p class="text-body-color text-base dark:text-dark-6">
							เมนูแนะนำ
						</p>
					</div>
				</div>
			</div>
			<div class="-mx-4 flex flex-wrap justify-center">
				<div class="w-full px-4">
					<ul class="mb-12 flex flex-wrap justify-center space-x-1">
						<li class="mb-1">
							<button @click="showCards = 'all' "
								:class="showCards == 'all' ? activeClasses : inactiveClasses "
								class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
								รวมเมนู
							</button>
						</li>
						<li class="mb-1">
							<button @click="showCards = 'latte' "
								:class="showCards == 'latte' ? activeClasses : inactiveClasses "
								class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
								ลาเต้
							</button>
						</li>
						<li class="mb-1">
							<button @click="showCards = 'tea' "
								:class="showCards == 'tea' ? activeClasses : inactiveClasses "
								class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
								ชา
							</button>
						</li>
						<li class="mb-1">
							<button @click="showCards = 'fruit' "
								:class="showCards == 'fruit' ? activeClasses : inactiveClasses "
								class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
								ผลไม้
							</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="mx-10 flex flex-wrap">
				<div :class="showCards == 'all' || showCards == 'latte' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/อัญชันลาเต้.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                อัญชันลาเต้
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>
				<div :class="showCards == 'all' || showCards == 'fruit' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/ชาอัญชันน้ำผึ้งมะนาว.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                ชาอัญชันน้ำผึ้งมะนาว
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>

				<div :class="showCards == 'all' || showCards == 'tea' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/ชาไทย.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                ชาไทย
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>

				<div :class="showCards == 'all' || showCards == 'tea' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/ชาเขียวมัทฉะชิอาวาเสะ.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                ชาเขียวมัทฉะชิอาวาเสะ
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>

				<div :class="showCards == 'all' || showCards == 'fruit' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/ชาสตรอเบอร์รี่.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                ชาสตรอเบอร์รี่
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>
				<div :class="showCards == 'all' || showCards == 'latte' ? 'block' : 'hidden' "
                    class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="relative mb-12"><br><br><br>

                        <div
                            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{asset('promote/img/กุหลาบลาเต้.jpg')}}" alt="portfolio" class="w-full" />
                            </div>
                            <span class="text-primary mb-2 block text-sm font-medium">
                                60 บาท
                            </span>
                            <h3 class="text-dark dark:text-white mb-5 text-xl font-bold">
                                กุหลาบลาเต้
                            </h3>
                            <a href="{{ route('promote.menu') }}"
                                class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-primary inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-[#959191]">
                                สั่งเลย
                            </a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- ====== Portfolio Section End -->
@endsection
