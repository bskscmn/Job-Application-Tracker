<template>
    <div :class="[activeClass]">
        <div class="relative" >
            <div @click="open = ! open">
                <slot name="trigger"></slot>
            </div>

            <!-- Full Screen Dropdown Overlay -->
            <div v-show="open" class="fixed inset-0 z-40" @click="open = false">
            </div>

            <transition
                enter-active-class="transition ease-out duration-200"
                enter-class="transform opacity-0 scale-95"
                enter-to-class="transform opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75"
                leave-class="transform opacity-100 scale-100"
                leave-to-class="transform opacity-0 scale-95">
                <div v-show="open"
                        class="absolute z-50 mt-2 rounded-md shadow-lg"
                        :class="[widthClass, alignmentClasses]"
                        style="display: none;"
                        @click="open = false">
                    <div class="rounded-md shadow-xs" :class="contentClasses">
                        <slot name="content"></slot>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            align: {
                default: 'right'
            },
            width: {
                default: '48'
            },
            contentClasses: {
                default: () => ['py-1', 'bg-white']
            },
            active: {
                default: false
            }
        },

        data() {
            return {
                open: false
            }
        },

        created() {
            const closeOnEscape = (e) => {
                if (this.open && e.keyCode === 27) {
                    this.open = false
                }
            }

            this.$once('hook:destroyed', () => {
                document.removeEventListener('keydown', closeOnEscape)
            })

            document.addEventListener('keydown', closeOnEscape)
        },

        computed: {
            widthClass() {
                return {
                    '48': 'w-48',
                }[this.width.toString()]
            },

            alignmentClasses() {
                if (this.align == 'left') {
                    return 'origin-top-left left-0'
                } else if (this.align == 'right') {
                    return 'origin-top-right right-0'
                } else {
                    return 'origin-top'
                }
            },
        
            activeClass() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
