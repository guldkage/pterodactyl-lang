import React, { useEffect, useState } from 'react';
import { ServerContext } from '@/state/server';
import TitledGreyBox from '@/components/elements/TitledGreyBox';
import reinstallServer from '@/api/server/reinstallServer';
import { Actions, useStoreActions } from 'easy-peasy';
import { ApplicationStore } from '@/state';
import { httpErrorToHuman } from '@/api/http';
import tw from 'twin.macro';
import { Button } from '@/components/elements/button/index';
import { Dialog } from '@/components/elements/dialog';

export default () => {
    const uuid = ServerContext.useStoreState((state) => state.server.data!.uuid);
    const [modalVisible, setModalVisible] = useState(false);
    const { addFlash, clearFlashes } = useStoreActions((actions: Actions<ApplicationStore>) => actions.flashes);

    const reinstall = () => {
        clearFlashes('settings');
        reinstallServer(uuid)
            .then(() => {
                addFlash({
                    key: 'settings',
                    type: 'success',
                    message: 'Din server har påbegyndt geninstallationsprocessen.',
                });
            })
            .catch((error) => {
                console.error(error);

                addFlash({ key: 'settings', type: 'error', message: httpErrorToHuman(error) });
            })
            .then(() => setModalVisible(false));
    };

    useEffect(() => {
        clearFlashes();
    }, []);

    return (
        <TitledGreyBox title={'Geninstaller server'} css={tw`relative`}>
            <Dialog.Confirm
                open={modalVisible}
                title={'Bekræft geninstallation af serveren'}
                confirm={'Ja, geninstaller serveren'}
                onClose={() => setModalVisible(false)}
                onConfirmed={reinstall}
            >
                Din server vil blive stoppet, og nogle filer kan blive slettet eller ændret under denne proces, er du sikker
                ønsker du at fortsætte?
            </Dialog.Confirm>
            <p css={tw`text-sm`}>
                Geninstallering af din server stopper den, og kører derefter det installationsscript, der oprindeligt satte den op.&nbsp;
                <strong css={tw`font-medium`}>
                    Nogle filer kan blive slettet eller ændret under denne proces, sikkerhedskopier venligst dine data inden
                    du fortsætter.
                </strong>
            </p>
            <div css={tw`mt-6 text-right`}>
                <Button.Danger variant={Button.Variants.Secondary} onClick={() => setModalVisible(true)}>
                    Geninstaller server
                </Button.Danger>
            </div>
        </TitledGreyBox>
    );
};
