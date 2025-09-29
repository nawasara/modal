    <div>
        <livewire:nawasara-modal.livewire-modal />

        <script>
            window.openModal = function(idOrParams) {
                if (typeof idOrParams === 'string') {
                    window.dispatchEvent(new CustomEvent('open-modal', {
                        detail: {
                            id: idOrParams
                        }
                    }));
                } else if (typeof idOrParams === 'object') {
                    window.dispatchEvent(new CustomEvent('open-modal', {
                        detail: idOrParams
                    }));
                }
            };

            window.closeModal = function(idOrParams) {
                if (typeof idOrParams === 'string') {
                    window.dispatchEvent(new CustomEvent('close-modal', {
                        detail: {
                            id: idOrParams
                        }
                    }));
                } else if (typeof idOrParams === 'object') {
                    window.dispatchEvent(new CustomEvent('close-modal', {
                        detail: idOrParams
                    }));
                }
            };

            window.openLivewireModal = function(idOrParams) {
                if (typeof idOrParams === 'string') {
                    window.dispatchEvent(new CustomEvent('open-livewire-modal', {
                        detail: {
                            id: idOrParams
                        }
                    }));
                } else if (typeof idOrParams === 'object') {
                    window.dispatchEvent(new CustomEvent('open-livewire-modal', {
                        detail: idOrParams
                    }));
                }
            };

            window.closeLivewireModal = function(idOrParams) {
                if (typeof idOrParams === 'string') {
                    window.dispatchEvent(new CustomEvent('close-livewire-modal', {
                        detail: {
                            id: idOrParams
                        }
                    }));
                } else if (typeof idOrParams === 'object') {
                    window.dispatchEvent(new CustomEvent('close-livewire-modal', {
                        detail: idOrParams
                    }));
                }
            };
        </script>
    </div>
