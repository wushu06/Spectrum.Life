<template>
    <v-layout row class="pl-10 pr-10 pb-10">
        <v-flex xs12>
            <v-card ref="form" class="mb-5 mt-3" min-width="800">
                <v-card-text>
                    <v-text-field
                        ref="first_name"
                        v-model="search"
                        label="Search by name"
                        @keydown.enter="onEnter"
                        required
                    ></v-text-field>
                    <a  :href="`/browse/${contactByName}`"
                        v-bind:class="{ 'isDisabled': !search}" >Search</a>
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>
</template>

<script>
export default {
    props: [],
    data: () => ({
        search: null,

    }),
    computed: {
        contactByName: function () {
            return this.search ? this.search.replace(/ /g,"+") : ''
        }
    },
    methods: {
        onEnter: function() {
           if(this.search)
               window.location.href = `/browse/${this.contactByName}`;
        }
    },
}
</script>

