<!--Pills navigation-->
<ul
  class="mb-5 flex list-none flex-col flex-wrap ps-0 md:flex-row"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation" class="flex-grow basis-0 text-center">
    <a
      href="#pills-home02"
      class="my-2 block rounded bg-zinc-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[twe-nav-active]:!bg-primary-100 data-[twe-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white/50 dark:data-[twe-nav-active]:!bg-slate-900 dark:data-[twe-nav-active]:text-primary-500 md:me-4"
      id="pills-home-tab02"
      data-twe-toggle="pill"
      data-twe-target="#pills-home02"
      data-twe-nav-active
      role="tab"
      aria-controls="pills-home02"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="profile" class="flex-grow basis-0 text-center">
    <a
      href="#pills-profile02"
      class="my-2 block rounded bg-zinc-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[twe-nav-active]:!bg-primary-100 data-[twe-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white/50 dark:data-[twe-nav-active]:!bg-slate-900 dark:data-[twe-nav-active]:text-primary-500 md:me-4"
      id="pills-profile-tab02"
      data-twe-toggle="pill"
      data-twe-target="#pills-profile02"
      role="tab"
      aria-controls="pills-profile02"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="contact" class="flex-grow basis-0 text-center">
    <a
      href="#pills-contact02"
      class="my-2 block rounded bg-zinc-100 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 data-[twe-nav-active]:!bg-primary-100 data-[twe-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white/50 dark:data-[twe-nav-active]:!bg-slate-900 dark:data-[twe-nav-active]:text-primary-500 md:me-4"
      id="pills-contact-tab02"
      data-twe-toggle="pill"
      data-twe-target="#pills-contact02"
      role="tab"
      aria-controls="pills-contact02"
      aria-selected="false"
      >Contact</a
    >
  </li>
  <li role="disabled" class="flex-grow basis-0 text-center">
    <a
      href="#pills-disabled02"
      class="pointer-events-none my-2 block rounded bg-zinc-200 px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 dark:bg-neutral-600 dark:text-neutral-500"
      id="pills-disabled-tab02"
      data-twe-toggle="pill"
      data-twe-target="#pills-disabled02"
      role="tab"
      aria-controls="pills-disabled02"
      aria-selected="false"
      >Disabled</a
    >
  </li>
</ul>

<!--Pills content-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="pills-home02"
    role="tabpanel"
    aria-labelledby="pills-home-tab02"
    data-twe-tab-active>
    Tab 1 content justified
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="pills-profile02"
    role="tabpanel"
    aria-labelledby="pills-profile-tab02">
    Tab 2 content justified
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="pills-contact02"
    role="tabpanel"
    aria-labelledby="pills-contact-tab02">
    Tab 3 content justified
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="pills-disabled02"
    role="tabpanel"
    aria-labelledby="pills-disabled-tab02">
    Tab 4 disabled justified
  </div>
</div>
@yield('content')