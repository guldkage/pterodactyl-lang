import React from 'react';
import { ServerContext } from '@/state/server';
import ScreenBlock from '@/components/elements/ScreenBlock';
import ServerInstallSvg from '@/assets/images/server_installing.svg';
import ServerErrorSvg from '@/assets/images/server_error.svg';
import ServerRestoreSvg from '@/assets/images/server_restore.svg';

export default () => {
    const status = ServerContext.useStoreState((state) => state.server.data?.status || null);
    const isTransferring = ServerContext.useStoreState((state) => state.server.data?.isTransferring || false);
    const isNodeUnderMaintenance = ServerContext.useStoreState(
        (state) => state.server.data?.isNodeUnderMaintenance || false
    );

    return status === 'installing' || status === 'install_failed' ? (
        <ScreenBlock
            title={'Kører installationsprogram'}
            image={ServerInstallSvg}
            message={'Din server skulle snart være klar, prøv venligst igen om et par minutter.'}
        />
    ) : status === 'suspended' ? (
        <ScreenBlock
            title={'Server suspenderet'}
            image={ServerErrorSvg}
            message={'Denne server er suspenderet og kan ikke tilgås.'}
        />
    ) : isNodeUnderMaintenance ? (
        <ScreenBlock
            title={'Maskine under Vedligeholdelse'}
            image={ServerErrorSvg}
            message={'Den maskine, din server er på, er i øjeblikket under vedligeholdelse. Du kan derfor ikke administrere din server i øjeblikket her.'}
        />
    ) : (
        <ScreenBlock
            title={isTransferring ? 'Transferring' : 'Restoring from Backup'}
            image={ServerRestoreSvg}
            message={
                isTransferring
                    ? 'Din server bliver overført til en ny maskine. Kom venligst tilbage senere.'
                    : 'Din server er i øjeblikket ved at blive gendannet fra en backup. Kom venligst tilbage om et par minutter.'
            }
        />
    );
};
