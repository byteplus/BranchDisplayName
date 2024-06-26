<link rel="stylesheet" href="{{ asset('css/branch-name-display.css') }}">

<div class="branch-name-display" id="branchNameDisplay">
    <div class="content">
        Branch: {{ $branchName }}
    </div>
</div>

<script>
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
</script>
