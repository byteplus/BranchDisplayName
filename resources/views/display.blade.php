<style>
    .branch-display {
        position: fixed;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 5px;
        font-size: 12px;
        border-radius: 4px;
        z-index: 9999;
    }
    </style>

    <div class="branch-display">
        Current Branch: {{ $branchName }}
    </div>


{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const branchNameDisplay = document.getElementById('branchNameDisplay');
        let isOnRightSide = true;

        branchNameDisplay.addEventListener('mouseenter', function () {
            if (isOnRightSide) {
                branchNameDisplay.style.right = 'auto';
                branchNameDisplay.style.left = '10px';
                isOnRightSide = false;
            } else {
                branchNameDisplay.style.left = 'auto';
                branchNameDisplay.style.right = '10px';
                isOnRightSide = true;
            }
        });
    });
</script> --}}
