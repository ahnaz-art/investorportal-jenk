<template>
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" class="bank">
    <g transform="translate(-61 -207)">
        <circle
            v-if="idle"
            cx="25"
            cy="25"
            r="25"
            transform="translate(61 207)"
            fill="#EFF1FE"
        />
        <circle
            v-else
            cx="25"
            cy="25"
            r="25"
            transform="translate(61 207)"
        />
        <g transform="translate(73.618 217.009)" v-if="idle" fill="#9EA5AF">
            <g transform="translate(0 0)">
                <g transform="translate(0 0)">
                    <path
                        d="M26.106,22.122h-.885V21.68a1.327,1.327,0,0,0-.885-1.246V11.422a1.327,1.327,0,0,0,.885-1.246V9.734a1.327,1.327,0,1,0,0-2.655H24.9L13.507.065a.442.442,0,0,0-.464,0L1.646,7.079H1.328a1.327,1.327,0,1,0,0,2.655v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H.443A.442.442,0,0,0,0,22.565V26.1a.442.442,0,0,0,.442.442H26.106a.442.442,0,0,0,.442-.442v-3.54A.442.442,0,0,0,26.106,22.122Zm-1.77-11.946a.442.442,0,0,1-.442.442h-1.77a.442.442,0,0,1-.442-.442V9.734h2.655Zm-.442,11.061a.442.442,0,0,1,.442.442v.442H21.681V21.68a.442.442,0,0,1,.442-.442Zm-1.327-.885V11.5h.885v8.849ZM1.328,8.849a.442.442,0,1,1,0-.885h3.1V7.079H3.334L13.275.962l9.941,6.117H7.08v.885H25.221a.442.442,0,1,1,0,.885Zm8.849,11.585V11.422a1.327,1.327,0,0,0,.885-1.246V9.734h4.425v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H11.062V21.68A1.327,1.327,0,0,0,10.178,20.434Zm-.442.8a.442.442,0,0,1,.442.442v.442H7.523V21.68a.442.442,0,0,1,.442-.442Zm-1.327-.885V11.5h.885v8.849Zm1.327-9.734H7.965a.442.442,0,0,1-.442-.442V9.734h2.655v.442A.442.442,0,0,1,9.735,10.619ZM16.372,21.68a.442.442,0,0,1,.442-.442h1.77a.442.442,0,0,1,.442.442v.442H16.372Zm.885-1.327V11.5h.885v8.849Zm1.327-9.734h-1.77a.442.442,0,0,1-.442-.442V9.734h2.655v.442A.442.442,0,0,1,18.584,10.619Zm-15.928,0a.442.442,0,0,1-.442-.442V9.734H4.868v.442a.442.442,0,0,1-.442.442Zm1.327.885v8.849H3.1V11.5ZM2.213,21.68a.442.442,0,0,1,.442-.442h1.77a.442.442,0,0,1,.442.442v.442H2.213Zm3.54,3.982H.886V23.007H5.753Zm-.885-5.228V11.422a1.327,1.327,0,0,0,.885-1.246V9.734h.885v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H5.753V21.68A1.327,1.327,0,0,0,4.868,20.434Zm15.044,5.228H6.638v-.885H17.257v-.885H6.638v-.885H19.912Zm-.885-5.228V11.422a1.327,1.327,0,0,0,.885-1.246V9.734H20.8v.442a1.327,1.327,0,0,0,.885,1.246v9.012A1.327,1.327,0,0,0,20.8,21.68v.442h-.885V21.68A1.327,1.327,0,0,0,19.027,20.434Zm6.637,5.228H20.8V23.007h4.867Z"
                        transform="translate(-0.001 0.001)" />
                </g>
            </g>
            <g transform="translate(17.851 23.585)">
                <g transform="translate(0 0)">
                    <rect width="1" height="1" transform="translate(-0.469 0.406)" />
                </g>
            </g>
            <g transform="translate(5.351 7.179)">
                <g transform="translate(0 0)">
                    <rect width="2" height="1" transform="translate(0.031 -0.188)" />
                </g>
            </g>
            <g transform="translate(11.504 2.655)">
                <path
                    d="M209.771,48a1.77,1.77,0,1,0,1.77,1.77A1.77,1.77,0,0,0,209.771,48Zm0,2.655a.885.885,0,1,1,.885-.885A.885.885,0,0,1,209.771,50.657Z"
                    transform="translate(-208.001 -48.002)" />
            </g>
        </g>
        <g transform="translate(73.618 217.009)" v-else class="icon">
            <g transform="translate(0 0)">
                <g transform="translate(0 0)">
                    <path
                        d="M26.106,22.122h-.885V21.68a1.327,1.327,0,0,0-.885-1.246V11.422a1.327,1.327,0,0,0,.885-1.246V9.734a1.327,1.327,0,1,0,0-2.655H24.9L13.507.065a.442.442,0,0,0-.464,0L1.646,7.079H1.328a1.327,1.327,0,1,0,0,2.655v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H.443A.442.442,0,0,0,0,22.565V26.1a.442.442,0,0,0,.442.442H26.106a.442.442,0,0,0,.442-.442v-3.54A.442.442,0,0,0,26.106,22.122Zm-1.77-11.946a.442.442,0,0,1-.442.442h-1.77a.442.442,0,0,1-.442-.442V9.734h2.655Zm-.442,11.061a.442.442,0,0,1,.442.442v.442H21.681V21.68a.442.442,0,0,1,.442-.442Zm-1.327-.885V11.5h.885v8.849ZM1.328,8.849a.442.442,0,1,1,0-.885h3.1V7.079H3.334L13.275.962l9.941,6.117H7.08v.885H25.221a.442.442,0,1,1,0,.885Zm8.849,11.585V11.422a1.327,1.327,0,0,0,.885-1.246V9.734h4.425v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H11.062V21.68A1.327,1.327,0,0,0,10.178,20.434Zm-.442.8a.442.442,0,0,1,.442.442v.442H7.523V21.68a.442.442,0,0,1,.442-.442Zm-1.327-.885V11.5h.885v8.849Zm1.327-9.734H7.965a.442.442,0,0,1-.442-.442V9.734h2.655v.442A.442.442,0,0,1,9.735,10.619ZM16.372,21.68a.442.442,0,0,1,.442-.442h1.77a.442.442,0,0,1,.442.442v.442H16.372Zm.885-1.327V11.5h.885v8.849Zm1.327-9.734h-1.77a.442.442,0,0,1-.442-.442V9.734h2.655v.442A.442.442,0,0,1,18.584,10.619Zm-15.928,0a.442.442,0,0,1-.442-.442V9.734H4.868v.442a.442.442,0,0,1-.442.442Zm1.327.885v8.849H3.1V11.5ZM2.213,21.68a.442.442,0,0,1,.442-.442h1.77a.442.442,0,0,1,.442.442v.442H2.213Zm3.54,3.982H.886V23.007H5.753Zm-.885-5.228V11.422a1.327,1.327,0,0,0,.885-1.246V9.734h.885v.442a1.327,1.327,0,0,0,.885,1.246v9.012a1.327,1.327,0,0,0-.885,1.246v.442H5.753V21.68A1.327,1.327,0,0,0,4.868,20.434Zm15.044,5.228H6.638v-.885H17.257v-.885H6.638v-.885H19.912Zm-.885-5.228V11.422a1.327,1.327,0,0,0,.885-1.246V9.734H20.8v.442a1.327,1.327,0,0,0,.885,1.246v9.012A1.327,1.327,0,0,0,20.8,21.68v.442h-.885V21.68A1.327,1.327,0,0,0,19.027,20.434Zm6.637,5.228H20.8V23.007h4.867Z"
                        transform="translate(-0.001 0.001)" />
                </g>
            </g>
            <g transform="translate(17.851 23.585)">
                <g transform="translate(0 0)">
                    <rect width="1" height="1" transform="translate(-0.469 0.406)" />
                </g>
            </g>
            <g transform="translate(5.351 7.179)">
                <g transform="translate(0 0)">
                    <rect width="2" height="1" transform="translate(0.031 -0.188)" />
                </g>
            </g>
            <g transform="translate(11.504 2.655)">
                <path
                    d="M209.771,48a1.77,1.77,0,1,0,1.77,1.77A1.77,1.77,0,0,0,209.771,48Zm0,2.655a.885.885,0,1,1,.885-.885A.885.885,0,0,1,209.771,50.657Z"
                    transform="translate(-208.001 -48.002)" />
            </g>
        </g>
    </g>
</svg>
</template>

<script>
export default {
    name: 'icon-bank',
    props:{
        idle: Boolean
    }
}
</script>

<style>

</style>