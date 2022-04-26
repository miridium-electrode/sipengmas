<template>
    <div>
        <Head title="Pengmas" />
        <div class="flex">
            <div id="filter" class="">
                <p>Prodi</p>
                <ul v-for="p in prodi">
                    <li>{{ p.nama }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
  import { Head } from '@inertiajs/inertia-vue3'

  export default {
      components: {
          Head,
      },
      props: {
          prodi: Object,
          periode: Object
      }
  }
</script>