# $FreeBSD$

PORTNAME=	pfSense-pkg-ResetRoutingAfterVPNConnect
PORTVERSION=	0.1
PORTREVISION=	10
CATEGORIES=	net-mgmt
MASTER_SITES=	# empty
DISTFILES=	# empty
EXTRACT_ONLY=	# empty

MAINTAINER=	pgithub at upfold.org.uk
COMMENT=	Automatically reconfigure routing for a default gateway that is only accessible after an OpenVPN interface comes up.

LICENSE=	APACHE20

RUN_DEPENDS=	# empty

NO_BUILD=	yes
NO_MTREE=	yes

SUB_FILES=	pkg-install pkg-deinstall
SUB_LIST=	PORTNAME=${PORTNAME}

do-extract:
	${MKDIR} ${WRKSRC}

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/pkg
	${MKDIR} ${STAGEDIR}/etc/inc/priv
	${MKDIR} ${STAGEDIR}${DATADIR}

	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmp.inc \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/netsnmp.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmp_communities.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmp_hostinfo.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmp_trapgen.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmp_users.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd_communities.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd_formats.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd_forwards.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd_traphandles.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} -m 0644 ${FILESDIR}${PREFIX}/pkg/net-snmptrapd_users.xml \
	# 	${STAGEDIR}${PREFIX}/pkg
	# ${INSTALL_DATA} ${FILESDIR}/etc/inc/priv/net-snmp.priv.inc \
	# 	${STAGEDIR}/etc/inc/priv
	# ${INSTALL_DATA} ${FILESDIR}${DATADIR}/info.xml \
	# 	${STAGEDIR}${DATADIR}
	# @${REINPLACE_CMD} -i '' -e "s|%%PKGVERSION%%|${PKGVERSION}|" \
	# 	${STAGEDIR}${DATADIR}/info.xml

.include <bsd.port.mk>
