import React from 'react';
import Can from '@/components/elements/Can';
import { ServerError } from '@/components/elements/ScreenBlock';

export interface RequireServerPermissionProps {
    permissions: string | string[];
}

const RequireServerPermission: React.FC<RequireServerPermissionProps> = ({ children, permissions }) => {
    return (
        <Can
            action={permissions}
            renderOnError={
                <ServerError title={'Adgang forbudt'} message={'Du har ikke tilladelse til at få adgang til denne side.'} />
            }
        >
            {children}
        </Can>
    );
};

export default RequireServerPermission;
